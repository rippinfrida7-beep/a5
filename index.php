<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CosmicDialDune — Desert Archaeoastronomy, Solar Sundials & Celestial Horology</title>
  <meta name="description" content="Explore ancient desert solar sundials, astrolabe horology, dune archaeoastronomy, and celestial starlight navigation across dark sky sanctuaries.">
  <link rel="canonical" href="https://cosmicdialdune.com/">
  
  <!-- Open Graph -->
  <meta property="og:title" content="CosmicDialDune — Desert Archaeoastronomy & Solar Horology">
  <meta property="og:description" content="Precision solar sundials, dark sky dune observatories, and ancient celestial navigation across desert landscapes.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://cosmicdialdune.com/">
  <meta property="og:image" content="https://cosmicdialdune.com/images/hero-celestial-dune.jpg">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>

  <div class="reading-progress-bar" aria-hidden="true"></div>

  <!-- Announcement Bar -->
  <aside class="top-bar">
    <div class="container top-bar-inner">
      <span>✨ CosmicDialDune — Dedicated to desert archaeoastronomy, precision solar sundials & dark sky horology.</span>
      <div class="top-contact">
        <span>📍 181 Mercer Street, New York, NY 10012</span>
        <a href="tel:+18887775845">📞 +1-888-777-5845</a>
      </div>
    </div>
  </aside>

  <!-- Site Header -->
  <header class="site-header">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo" aria-label="CosmicDialDune Home">
          <div class="logo-badge">☀️</div>
          <span>CosmicDialDune</span>
        </a>

        <nav class="nav-menu" aria-label="Primary Navigation">
          <a href="index.php" class="nav-link active">Observatory Home</a>
          <a href="about.html" class="nav-link">Our Heritage</a>
          <a href="blog.html" class="nav-link">Celestial Journals</a>
          <a href="#solar-calculator" class="nav-link">Solar Azimuth Dial</a>
          <a href="contact.html" class="nav-link">Observatory Desk</a>
        </nav>

        <div class="nav-actions">
          <button class="theme-toggle-btn" aria-label="Toggle Lighting Theme" title="Toggle Theme">✨</button>
          <a href="blog.html" class="btn btn-gold" style="padding: 0.55rem 1.15rem; font-size: 0.86rem;">Read Journals</a>
          <button class="mobile-toggle" aria-label="Open Mobile Menu">☰</button>
        </div>
      </div>
    </div>
  </header>

  <main id="main-content">

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="hero-grid">
          <div>
            <span class="hero-eyebrow">✨ Archaeoastronomy & Desert Solar Horology</span>
            <h1 class="hero-title">Reading Time Across Desert Sands & Starlit Skies</h1>
            <p class="hero-lead">
              CosmicDialDune explores the ancient nexus of solar geometry, brass astrolabes, and desert archaeoastronomy. We document how ancient civilizations read celestial time across shifting dunes and pristine dark sky sanctuaries.
            </p>
            <div class="hero-btn-group">
              <a href="#solar-calculator" class="btn btn-gold">Interactive Solar Dial</a>
              <a href="blog.html" class="btn btn-outline">Explore Treatises</a>
            </div>
            <div class="hero-stats-row">
              <div class="stat-item">
                <h4>0.01°</h4>
                <p>Equinox Gnomon Accuracy</p>
              </div>
              <div class="stat-item">
                <h4>Class 1</h4>
                <p>Bortle Dark Sky Observatories</p>
              </div>
              <div class="stat-item">
                <h4>5,000+ Yrs</h4>
                <p>Desert Celestial Heritage</p>
              </div>
            </div>
          </div>

          <div>
            <div class="hero-card-media">
              <img src="images/hero-celestial-dune.jpg" alt="Majestic desert dunes under starry celestial night sky" width="1200" height="800">
              <div class="hero-card-badge">
                <p>"The desert dune is Earth's purest sundial. Its ridgelines cast shadows calibrated to the exact declination of the sun and the silent rotation of the cosmos."</p>
                <span>— CosmicDialDune Observatory Guild</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Solar Azimuth & Sundial Tool -->
    <section id="solar-calculator" class="tool-section">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Solar Gnomonics Calculator</span>
          <h2 class="section-title">The Desert Sundial & Solar Azimuth Tool</h2>
          <p class="section-subtitle">Simulate solar altitude, shadow casting ratios, and true north azimuth angles across variable desert latitudes.</p>
        </div>

        <div class="dial-tool-card">
          <div class="dial-slider-group">
            <div class="slider-control">
              <label for="dial-lat-slider">
                <span>Observer Latitude</span>
                <span id="dial-lat-val" style="color: var(--accent-gold); font-family: var(--font-mono);">32° N (Sonoran Desert)</span>
              </label>
              <input type="range" id="dial-lat-slider" min="15" max="55" step="1" value="32" aria-label="Observer Latitude">
            </div>

            <div class="slider-control">
              <label for="dial-hour-slider">
                <span>Local Solar Time</span>
                <span id="dial-hour-val" style="color: var(--accent-gold); font-family: var(--font-mono);">2:00 PM Solar Time</span>
              </label>
              <input type="range" id="dial-hour-slider" min="6" max="18" step="0.25" value="14" aria-label="Local Solar Time">
            </div>
          </div>

          <div class="dial-result-grid">
            <div class="result-box">
              <h4>Calculated Solar Altitude</h4>
              <p id="calc-altitude">48.2° Above Horizon</p>
            </div>

            <div class="result-box">
              <h4>Gnomon Shadow Length Ratio</h4>
              <p id="calc-shadow">0.90 × Gnomon Height</p>
            </div>

            <div class="result-box">
              <h4>Solar Azimuth Bearing</h4>
              <p id="calc-azimuth">218.4° True North</p>
            </div>
          </div>

          <div style="margin-top: 1.5rem; padding: 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); font-size: 0.92rem; color: var(--text-muted);">
            <strong>Equinox Horizon Physics:</strong> Solar time is measured by the local hour angle of the sun. The shadow cast by a polar-aligned gnomon moves $15^\circ$ per hour across the horizontal dial plate.
          </div>
        </div>
      </div>
    </section>

    <!-- Three Pillars Section -->
    <section class="pillars-section">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">The Triad of Celestial Science</span>
          <h2 class="section-title">The Three Pillars of CosmicDialDune</h2>
          <p class="section-subtitle">Dedicated to ancient solar timekeeping, brass astronomical instruments, and dark sky sanctuary stewardship.</p>
        </div>

        <div class="pillars-grid">
          <div class="pillar-card">
            <div class="pillar-icon-wrapper">☀️</div>
            <h3>1. Solar Gnomonics</h3>
            <p>We investigate the mathematical principles of shadow casting, analemmatic sundials, and latitude-calibrated gnomons engineered in desert environments.</p>
            <a href="about.html" class="pillar-link">Learn Solar Math &rarr;</a>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">🌌</div>
            <h3>2. Desert Archaeoastronomy</h3>
            <p>From ancient Nabataean solar alignments in Petra to Chaco Canyon sun daggers, we document how desert monuments align with solstice events.</p>
            <a href="about.html" class="pillar-link">Explore Alignments &rarr;</a>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">🔭</div>
            <h3>3. Dark Sky Observatories</h3>
            <p>Preserving the zero-light-pollution clarity of desert wilderness to facilitate stellar astrometry, planetary tracking, and celestial navigation.</p>
            <a href="about.html" class="pillar-link">Discover Dark Skies &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Visual Astronomical Showcase Gallery -->
    <section class="tool-section" style="background: var(--bg-surface-alt); padding: 5rem 0;">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Visual Sky Archives</span>
          <h2 class="section-title">Astronomy Across Dune Horizons</h2>
          <p class="section-subtitle">Experience the breathtaking convergence of pristine desert geography and timeless celestial observation.</p>
        </div>

        <div class="pillars-grid">
          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 240px; overflow: hidden;">
              <img src="images/feature-sundial-sand.jpg" alt="Golden sunlight and natural wind-swept sand ripples" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">Solar Sand Gnomonics</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">How desert dunes act as colossal natural dials, casting precise shadow angles across shifting sands.</p>
            </div>
          </div>

          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 240px; overflow: hidden;">
              <img src="images/feature-desert-night.jpg" alt="Brilliant Milky Way stars over peaceful desert night landscape" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">Desert Night Astrometry</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Unobstructed Bortle Class 1 dark sky stargazing, planetary charting, and celestial navigation methods.</p>
            </div>
          </div>

          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 240px; overflow: hidden;">
              <img src="images/feature-telescope-observatory.jpg" alt="Cosmic planetary sphere and celestial starlight alignment" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">Armillary & Astrolabe Craft</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Precision brass celestial spheres and planispheric astrolabes engineered for solar altitude calculation.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4-Stage Celestial Framework -->
    <section class="tool-section" style="background: var(--bg-surface);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Observatory Protocol</span>
          <h2 class="section-title">The Four Stages of Desert Celestial Timekeeping</h2>
          <p class="section-subtitle">The systematic progression from solar gnomon calibration to midnight stellar navigation.</p>
        </div>

        <div class="pillars-grid" style="grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
          <div class="pillar-card">
            <div class="pillar-icon-wrapper">1️⃣</div>
            <h3 style="font-size: 1.15rem;">Meridian Alignment</h3>
            <p style="font-size: 0.88rem;">Establishing True Solar North using the Indian Circle method and equal solar shadow lengths before solar noon.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">2️⃣</div>
            <h3 style="font-size: 1.15rem;">Gnomon Angulation</h3>
            <p style="font-size: 0.88rem;">Inclinating the gnomon stylus to match the exact observer latitude, aligning it directly with Polaris.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">3️⃣</div>
            <h3 style="font-size: 1.15rem;">Equation of Time</h3>
            <p style="font-size: 0.88rem;">Applying the analemma correction for Earth's orbital eccentricity and axial obliquity ($\pm 16\text{ minutes}$).</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">4️⃣</div>
            <h3 style="font-size: 1.15rem;">Nocturnal Sighting</h3>
            <p style="font-size: 0.88rem;">Transitioning at dusk to nocturnal dials and astrolabes, calculating sidereal time from circumpolar star rotations.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Technical Specification Matrix -->
    <section class="tool-section" style="background: var(--bg-surface-alt);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Instrument Specifications</span>
          <h2 class="section-title">Desert Horological Instrument Matrix</h2>
          <p class="section-subtitle">Comparison of solar sundial types, brass instruments, and celestial sighting apparatus.</p>
        </div>

        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow-x: auto; box-shadow: var(--shadow-sm); padding: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.92rem;">
            <thead>
              <tr style="border-bottom: 2px solid var(--border-subtle); color: var(--accent-gold);">
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Instrument Class</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Primary Material</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Temporal Precision</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Operational Range</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Observational Purpose</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Horizontal Equinox Dial</td>
                <td style="padding: 1rem; color: var(--text-muted);">Engraved Sandstone & Brass</td>
                <td style="padding: 1rem; color: var(--text-muted);">$\pm 2\text{ Minutes}$</td>
                <td style="padding: 1rem; color: var(--text-muted);">Sunrise to Sunset</td>
                <td style="padding: 1rem; color: var(--text-muted);">Local apparent solar time & solstice markers</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Planispheric Astrolabe</td>
                <td style="padding: 1rem; color: var(--text-muted);">Hand-Chiseled Brass Plate</td>
                <td style="padding: 1rem; color: var(--text-muted);">$\pm 1\text{ Minute}$</td>
                <td style="padding: 1rem; color: var(--text-muted);">24-Hour Diurnal & Nocturnal</td>
                <td style="padding: 1rem; color: var(--text-muted);">Stellar altitude, horary arcs & solar declination</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Armillary Sphere</td>
                <td style="padding: 1rem; color: var(--text-muted);">Cast Bronze Rings & Axis</td>
                <td style="padding: 1rem; color: var(--text-muted);">$\pm 0.5^\circ\text{ Arc}$</td>
                <td style="padding: 1rem; color: var(--text-muted);">Year-Round Celestial</td>
                <td style="padding: 1rem; color: var(--text-muted);">Ecliptic coordinates & planetary precession</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: 700;">Nocturnal Star Clock</td>
                <td style="padding: 1rem; color: var(--text-muted);">Hardwood & Brass Pivot</td>
                <td style="padding: 1rem; color: var(--text-muted);">$\pm 5\text{ Minutes}$</td>
                <td style="padding: 1rem; color: var(--text-muted);">Night (Circumpolar Stars)</td>
                <td style="padding: 1rem; color: var(--text-muted);">Sidereal night time via Ursa Major rotation</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
          <a href="about.html" class="btn btn-gold">Discover Our Heritage & Science</a>
          <a href="blog.html" class="btn btn-outline" style="margin-left: 0.75rem;">Explore Full Celestial Journals</a>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="pillars-section" style="background: var(--bg-surface);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Astronomical Queries</span>
          <h2 class="section-title">Celestial Horology & Desert Astronomy FAQ</h2>
          <p class="section-subtitle">Clarifying solar equations of time, gnomon physics, and desert archaeoastronomy.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; max-width: 1040px; margin: 0 auto;">
          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">What is the difference between Solar Time and Clock Time?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Solar time is determined directly by the sun's position relative to the local meridian. Standard clock time divides the globe into arbitrary time zones and assumes a uniform mean solar day.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">Why are desert dunes optimal for archaeoastronomy?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Deserts feature extremely low atmospheric humidity, minimal cloud cover, and vast unpolluted horizons, allowing precise observation of solstice sunrises and faint stellar magnitudes.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">What is the Equation of Time (EoT)?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">The Equation of Time is the discrepancy between apparent solar time (sundial) and mean solar time (clock), caused by Earth's elliptical orbit and $23.44^\circ$ axial tilt.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">How does a gnomon calculate local latitude?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">By measuring the solar altitude at solar noon on the vernal or autumnal equinox ($90^\circ - \text{Solar Altitude} = \text{Local Latitude}$), ancient astronomers determined precise geographic coordinates.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="brand-logo" style="color: var(--accent-gold); margin-bottom: 0.5rem;">
            <div class="logo-badge">☀️</div>
            <span>CosmicDialDune</span>
          </div>
          <p>
            An independent research observatory and educational journal dedicated to desert archaeoastronomy, precision solar sundials, and dark sky preservation.
          </p>
        </div>

        <div>
          <h4 class="footer-heading">Celestial Links</h4>
          <ul class="footer-links">
            <li><a href="index.php">Observatory Home</a></li>
            <li><a href="about.html">About CosmicDialDune</a></li>
            <li><a href="blog.html">Celestial Journals</a></li>
            <li><a href="#solar-calculator">Solar Azimuth Dial</a></li>
            <li><a href="contact.html">Contact Observatory</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Trust & Governance</h4>
          <ul class="footer-links">
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms of Service</a></li>
            <li><a href="disclaimer.html">Astronomical Disclaimer</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Observatory Headquarters</h4>
          <p class="footer-contact-text">
            <strong>Guild Desk:</strong><br>
            181 Mercer Street,<br>
            New York, NY 10012,<br>
            United States
          </p>
          <p class="footer-contact-text" style="margin-top: 0.75rem;">
            <strong>Inquiries:</strong><br>
            <a href="tel:+18887775845">+1-888-777-5845</a>
          </p>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo date('Y'); ?> CosmicDialDune. All rights reserved. Reading celestial time across eternity.
        </div>
        <div class="footer-bottom-links">
          <a href="privacy.html">Privacy</a>
          <a href="terms.html">Terms</a>
          <a href="disclaimer.html">Disclaimer</a>
          <a href="cookies.html">Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
