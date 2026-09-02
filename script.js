/* ==========================================================================
   COSMICDIALDUNE — JAVASCRIPT CONTROLLERS
   Solar Azimuth Calculator, Astrolabe Controls, Theme Switcher, Search & Fonts
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

  // 1. Reading Progress Bar
  const progressBar = document.querySelector('.reading-progress-bar');
  if (progressBar) {
    window.addEventListener('scroll', () => {
      const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
      progressBar.style.width = scrolled + '%';
    });
  }

  // 2. 3-Mode Theme Switcher (Cosmos Midnight -> Desert Twilight -> Dawn Sand)
  const themeBtn = document.querySelector('.theme-toggle-btn');
  const themes = ['theme-cosmos', 'theme-twilight', 'theme-dawn'];
  const themeIcons = ['✨', '🌌', '☀️'];
  
  let currentThemeIndex = 0;
  const savedTheme = localStorage.getItem('cosmicdialdune_theme');
  if (savedTheme) {
    const idx = themes.indexOf(savedTheme);
    if (idx !== -1) {
      currentThemeIndex = idx;
      if (savedTheme !== 'theme-cosmos') {
        document.body.classList.add(savedTheme);
      }
    }
  }

  if (themeBtn) {
    themeBtn.textContent = themeIcons[currentThemeIndex];
    themeBtn.addEventListener('click', () => {
      document.body.classList.remove('theme-twilight', 'theme-dawn');
      currentThemeIndex = (currentThemeIndex + 1) % themes.length;
      const newTheme = themes[currentThemeIndex];
      
      if (newTheme !== 'theme-cosmos') {
        document.body.classList.add(newTheme);
      }
      themeBtn.textContent = themeIcons[currentThemeIndex];
      localStorage.setItem('cosmicdialdune_theme', newTheme);
    });
  }

  // 3. Mobile Navigation Menu Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu = document.querySelector('.nav-menu');
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      const isOpen = navMenu.style.display === 'flex';
      navMenu.style.display = isOpen ? 'none' : 'flex';
      if (!isOpen) {
        navMenu.style.flexDirection = 'column';
        navMenu.style.position = 'absolute';
        navMenu.style.top = '100%';
        navMenu.style.left = '0';
        navMenu.style.right = '0';
        navMenu.style.backgroundColor = 'var(--bg-surface)';
        navMenu.style.padding = '1.5rem';
        navMenu.style.boxShadow = 'var(--shadow-md)';
        navMenu.style.borderBottom = '1px solid var(--border-subtle)';
      }
    });
  }

  // 4. Interactive Solar Azimuth & Sundial Gnomon Calculator
  const latSlider = document.getElementById('dial-lat-slider');
  const hourSlider = document.getElementById('dial-hour-slider');
  const latVal = document.getElementById('dial-lat-val');
  const hourVal = document.getElementById('dial-hour-val');

  const altitudeDisplay = document.getElementById('calc-altitude');
  const shadowDisplay = document.getElementById('calc-shadow');
  const azimuthDisplay = document.getElementById('calc-azimuth');

  function calculateSolarGeometry() {
    if (!latSlider || !hourSlider) return;

    const lat = parseFloat(latSlider.value);
    const hour = parseFloat(hourSlider.value);

    if (latVal) latVal.textContent = `${lat}° N`;
    
    // Format hour into 12-hour AM/PM
    const hourInt = Math.floor(hour);
    const mins = Math.round((hour - hourInt) * 60);
    const minStr = mins < 10 ? `0${mins}` : mins;
    const period = hour >= 12 ? 'PM' : 'AM';
    const displayHour = hour > 12 ? Math.floor(hour - 12) : (hourInt === 0 ? 12 : hourInt);
    if (hourVal) hourVal.textContent = `${displayHour}:${minStr} ${period} Solar Time`;

    // Calculate approximate solar altitude (declination = 0 for equinox)
    const latRad = lat * (Math.PI / 180);
    const hourAngleRad = (hour - 12) * 15 * (Math.PI / 180);

    const sinAlt = Math.cos(latRad) * Math.cos(hourAngleRad);
    const altitudeRad = Math.asin(Math.max(-1, Math.min(1, sinAlt)));
    const altitudeDeg = Math.max(0, altitudeRad * (180 / Math.PI));

    // Shadow length ratio (for 1-meter vertical gnomon)
    let shadowRatio = altitudeDeg > 0 ? (1 / Math.tan(altitudeRad)).toFixed(2) : 'Infinite (Below Horizon)';
    if (altitudeDeg > 0) shadowRatio = `${shadowRatio} × Gnomon Height`;

    // Azimuth calculation
    let azimuthDeg = 180;
    if (altitudeDeg > 0) {
      const cosAz = (Math.sin(latRad) * Math.cos(hourAngleRad)) / Math.cos(altitudeRad);
      const azRad = Math.acos(Math.max(-1, Math.min(1, cosAz)));
      azimuthDeg = hour < 12 ? (180 - azRad * (180 / Math.PI)) : (180 + azRad * (180 / Math.PI));
    }

    if (altitudeDisplay) altitudeDisplay.textContent = `${altitudeDeg.toFixed(1)}° Above Horizon`;
    if (shadowDisplay) shadowDisplay.textContent = shadowRatio;
    if (azimuthDisplay) azimuthDisplay.textContent = `${azimuthDeg.toFixed(1)}° True North`;
  }

  if (latSlider && hourSlider) {
    latSlider.addEventListener('input', calculateSolarGeometry);
    hourSlider.addEventListener('input', calculateSolarGeometry);
    calculateSolarGeometry();
  }

  // 5. In-Article Typography Scaler
  const fontDec = document.querySelector('.font-dec');
  const fontReset = document.querySelector('.font-reset');
  const fontInc = document.querySelector('.font-inc');
  const articleBody = document.querySelector('.article-body');

  let currentFontSize = 1.125; // rem

  if (articleBody) {
    if (fontDec) {
      fontDec.addEventListener('click', () => {
        if (currentFontSize > 0.95) {
          currentFontSize -= 0.075;
          articleBody.style.fontSize = currentFontSize + 'rem';
        }
      });
    }
    if (fontReset) {
      fontReset.addEventListener('click', () => {
        currentFontSize = 1.125;
        articleBody.style.fontSize = '1.125rem';
      });
    }
    if (fontInc) {
      fontInc.addEventListener('click', () => {
        if (currentFontSize < 1.45) {
          currentFontSize += 0.075;
          articleBody.style.fontSize = currentFontSize + 'rem';
        }
      });
    }
  }

  // 6. Blog Archive Search & Live Filter Chips
  const searchInput = document.getElementById('cosmic-search-input');
  const filterChips = document.querySelectorAll('.filter-chip');
  const blogCards = document.querySelectorAll('.blog-card');

  function filterPosts() {
    const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
    const activeChip = document.querySelector('.filter-chip.active');
    const selectedCategory = activeChip ? activeChip.getAttribute('data-category') : 'all';

    blogCards.forEach(card => {
      const cardCategory = card.getAttribute('data-category') || '';
      const text = card.textContent.toLowerCase();
      
      const matchesCategory = (selectedCategory === 'all' || cardCategory === selectedCategory);
      const matchesQuery = query === '' || text.includes(query);

      if (matchesCategory && matchesQuery) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  if (searchInput) {
    searchInput.addEventListener('input', filterPosts);
  }

  if (filterChips.length > 0) {
    filterChips.forEach(chip => {
      chip.addEventListener('click', () => {
        filterChips.forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        filterPosts();
      });
    });
  }

});
