<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CosmicDialDune — Haute Horlogerie, Celestial Dials & Desert Chronometry</title>
  <meta name="description" content="Discover handcrafted luxury timepieces inspired by celestial mechanics, meteorite cosmic dials, dune textures, and astronomical complications.">
  <link rel="canonical" href="https://cosmicdialdune.com/">
  
  <!-- Open Graph -->
  <meta property="og:title" content="CosmicDialDune — Haute Horlogerie & Celestial Watches">
  <meta property="og:description" content="Handcrafted luxury wristwatches, meteorite dials, and desert-tested chronometers.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://cosmicdialdune.com/">
  <meta property="og:image" content="https://cosmicdialdune.com/images/hero-celestial-watch.jpg">

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
      <span>⌚ CosmicDialDune Atelier — Handcrafted Haute Horlogerie, Celestial Meteorite Dials & Desert Chronometers.</span>
      <div class="top-contact">
        <span>📍 181 Mercer Street, New York, NY 10012</span>
        <a href="tel:+18887775845">📞 +1-888-777-5845</a>
      </div>
    </div>
  </aside>

  <!-- Fixed Luxury Header -->
  <header class="site-header">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo" aria-label="CosmicDialDune Home">
          <div class="logo-badge">⌚</div>
          <div class="brand-title-group">
            <span class="brand-name">CosmicDialDune</span>
            <span class="brand-sub">Haute Horlogerie</span>
          </div>
        </a>

        <nav class="nav-menu" aria-label="Primary Navigation">
          <a href="index.php" class="nav-link active">Atelier Home</a>
          <a href="about.html" class="nav-link">Heritage & Craft</a>
          <a href="blog.html" class="nav-link">Horological Journal</a>
          <a href="#solar-calculator" class="nav-link">Solar Dial Configurator</a>
          <a href="contact.html" class="nav-link">Concierge Desk</a>
        </nav>

        <div class="nav-actions">
          <button class="theme-toggle-btn" aria-label="Toggle Lighting Theme" title="Toggle Theme">✨</button>
          <a href="contact.html" class="btn btn-gold" style="padding: 0.55rem 1.15rem; font-size: 0.84rem;">Inquire Timepiece</a>
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
            <span class="hero-eyebrow">⌚ Celestial Mechanics & Desert Horology</span>
            <h1 class="hero-title">Masterpieces of Time, Carved from Cosmic Sands</h1>
            <p class="hero-lead">
              CosmicDialDune creates luxury mechanical timepieces that capture the poetry of the cosmos. Inspired by ancient desert archaeoastronomy, our wristwatches integrate genuine Muonionalusta meteorite dials, hand-finished tourbillon escapements, and sand-dune textured horological architecture.
            </p>
            <div class="hero-btn-group">
              <a href="#solar-calculator" class="btn btn-gold">Configure Solar Dial</a>
              <a href="blog.html" class="btn btn-outline">Explore Watch Treatises</a>
            </div>
            <div class="hero-stats-row">
              <div class="stat-item">
                <h4>28,800</h4>
                <p>VPH Escapement Frequency</p>
              </div>
              <div class="stat-item">
                <h4>4.5 Billion</h4>
                <p>Years Old Meteorite Dials</p>
              </div>
              <div class="stat-item">
                <h4>-20° to +60°C</h4>
                <p>Desert Thermal Endurance</p>
              </div>
            </div>
          </div>

          <div>
            <div class="hero-card-media">
              <img src="images/hero-celestial-watch.jpg" alt="Luxury Tourbillon mechanical wristwatch with hand-finished dial on black reflective glass" width="1200" height="800">
              <div class="hero-card-badge">
                <p>"A mechanical watch is a miniature astronomical cosmos on the wrist. Each tick measures the eternal dance of planets across celestial dunes."</p>
                <span>— CosmicDialDune Master Watchmaker</span>
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
          <span class="section-eyebrow">Horological Gnomonics Simulator</span>
          <h2 class="section-title">The Astronomical Solar Dial Configurator</h2>
          <p class="section-subtitle">Simulate solar hour angles, gnomon shadow ratios, and celestial azimuth coordinates for your custom bespoke timepiece.</p>
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
            <strong>Equation of Time Horology:</strong> Our bespoke celestial watches feature an integrated mechanical Equation of Time (EoT) differential cam, indicating the discrepancy between apparent solar time and civil mean time ($\pm 16\text{ minutes}$).
          </div>
        </div>
      </div>
    </section>

    <!-- Three Pillars Section -->
    <section class="pillars-section">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">The Foundations of Our Manufacture</span>
          <h2 class="section-title">The Three Pillars of CosmicDialDune Horology</h2>
          <p class="section-subtitle">Blending artisanal Swiss mechanical watchmaking, rare extraterrestrial materials, and desert endurance engineering.</p>
        </div>

        <div class="pillars-grid">
          <div class="pillar-card">
            <div class="pillar-icon-wrapper">🌌</div>
            <h3>1. Meteorite & Cosmic Dials</h3>
            <p>Every dial is sliced from genuine iron-nickel octahedrite meteorites, revealing unique Widmanstätten crystalline cross-hatch patterns billions of years in the making.</p>
            <a href="about.html" class="pillar-link">Discover Materials &rarr;</a>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">⚙️</div>
            <h3>2. Astronomical Tourbillons</h3>
            <p>Gravity-compensating rotating tourbillon cages, 3D spherical moonphase complications accurate to 122 years, and sidereal time displays crafted in-house.</p>
            <a href="about.html" class="pillar-link">Explore Complications &rarr;</a>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">🛡️</div>
            <h3>3. Desert Chronometry</h3>
            <p>Hermetically sealed cases with paramagnetic titanium-bronze alloys and high-viscosity synthetic lubricants engineered for extreme thermal shifts and silica resistance.</p>
            <a href="about.html" class="pillar-link">Learn Engineering &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Visual Timepiece Showcase Gallery -->
    <section class="tool-section" style="background: var(--bg-surface-alt); padding: 5rem 0;">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Manufacture Gallery</span>
          <h2 class="section-title">The CosmicDialDune Timepiece Collection</h2>
          <p class="section-subtitle">Exquisite horological creations engineered for discerning collectors, astronomers, and desert explorers.</p>
        </div>

        <div class="pillars-grid">
          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 250px; overflow: hidden;">
              <img src="images/feature-meteorite-dial.jpg" alt="Luxury timepiece with dark celestial dial on desert sandstone at sunset" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">The Dune Solstice Chronometer</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Solid 18K rose gold casing with an undulating sand-dune textured guilloché dial and integrated solar azimuth bezel.</p>
            </div>
          </div>

          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 250px; overflow: hidden;">
              <img src="images/feature-dune-chronometer.jpg" alt="Precision tachymeter chronometer on natural river stones" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">The Sahara Expedition Tachymeter</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Rugged grade-5 titanium chronometer engineered for high-altitude desert navigation with 300-meter water and dust resistance.</p>
            </div>
          </div>

          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 250px; overflow: hidden;">
              <img src="images/feature-moonphase-complication.jpg" alt="Handcrafted minimalist gold timepiece with luxury leather strap" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">The Celestial Horizon Moonphase</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">An ultra-thin mechanical movement featuring a photorealistic lapis lazuli lunar disc and diamond-set constellation markers.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4-Stage Manufacture Process -->
    <section class="tool-section" style="background: var(--bg-surface);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">The Atelier Standards</span>
          <h2 class="section-title">The Four Stages of Handcrafted Watchmaking</h2>
          <p class="section-subtitle">From raw meteorite metallurgy to 500-hour master chronometer certification.</p>
        </div>

        <div class="pillars-grid" style="grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
          <div class="pillar-card">
            <div class="pillar-icon-wrapper">1️⃣</div>
            <h3 style="font-size: 1.15rem;">Meteorite Slicing</h3>
            <p style="font-size: 0.88rem;">Precision electrical discharge machining (EDM) to slice 0.35 mm ultra-thin dial plates, followed by acid-etching to reveal crystalline structures.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">2️⃣</div>
            <h3 style="font-size: 1.15rem;">Anglage & Polishing</h3>
            <p style="font-size: 0.88rem;">Hand-chamfering bridge edges with gentian wood sticks and applying traditional Geneva stripes (*Côtes de Genève*) to movement plates.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">3️⃣</div>
            <h3 style="font-size: 1.15rem;">Escapement Poising</h3>
            <p style="font-size: 0.88rem;">Dynamically balancing the free-sprung Glucydur balance wheel and adjusting micro-screws to achieve sub-second daily rate consistency.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">4️⃣</div>
            <h3 style="font-size: 1.15rem;">Thermal Endurance</h3>
            <p style="font-size: 0.88rem;">500 hours of continuous multi-position chronometer testing across simulated desert temperature swings from $-10^\circ\text{C}$ to $+55^\circ\text{C}$.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Technical Specification Matrix -->
    <section class="tool-section" style="background: var(--bg-surface-alt);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Manufacture Calibre Matrix</span>
          <h2 class="section-title">CosmicDialDune In-House Calibre Specifications</h2>
          <p class="section-subtitle">Comparative technical overview of our mechanical movements and astronomical complications.</p>
        </div>

        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow-x: auto; box-shadow: var(--shadow-sm); padding: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.92rem;">
            <thead>
              <tr style="border-bottom: 2px solid var(--border-subtle); color: var(--accent-gold);">
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Manufacture Calibre</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Dial Material</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Power Reserve</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Chronometric Rate</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Astronomical Complication</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Calibre CD-01 Tourbillon</td>
                <td style="padding: 1rem; color: var(--text-muted);">Muonionalusta Meteorite</td>
                <td style="padding: 1rem; color: var(--text-muted);">72 Hours (Twin Barrel)</td>
                <td style="padding: 1rem; color: var(--text-muted);">$-2 / +2\text{ sec/day}$ (COSC+)</td>
                <td style="padding: 1rem; color: var(--text-muted);">60-Second Flying Tourbillon & Solar Hour Angle</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Calibre CD-02 Moonphase</td>
                <td style="padding: 1rem; color: var(--text-muted);">Aventurine Starlight Glass</td>
                <td style="padding: 1rem; color: var(--text-muted);">48 Hours</td>
                <td style="padding: 1rem; color: var(--text-muted);">$-3 / +3\text{ sec/day}$</td>
                <td style="padding: 1rem; color: var(--text-muted);">122-Year Astronomical Spherical Moonphase</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Calibre CD-03 Desert Chrono</td>
                <td style="padding: 1rem; color: var(--text-muted);">Sand-Dune Guilloché Brass</td>
                <td style="padding: 1rem; color: var(--text-muted);">65 Hours</td>
                <td style="padding: 1rem; color: var(--text-muted);">$-2 / +4\text{ sec/day}$</td>
                <td style="padding: 1rem; color: var(--text-muted);">Column-Wheel Flyback Tachymeter Chronograph</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: 700;">Calibre CD-04 Sidereal</td>
                <td style="padding: 1rem; color: var(--text-muted);">Smoked Sapphire Crystal</td>
                <td style="padding: 1rem; color: var(--text-muted);">80 Hours</td>
                <td style="padding: 1rem; color: var(--text-muted);">$-1 / +2\text{ sec/day}$</td>
                <td style="padding: 1rem; color: var(--text-muted);">Dual Civil / Sidereal Star Time Display</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
          <a href="about.html" class="btn btn-gold">Discover Our Watchmaking Heritage</a>
          <a href="blog.html" class="btn btn-outline" style="margin-left: 0.75rem;">Explore Full Horology Journal</a>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="pillars-section" style="background: var(--bg-surface);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Collector Inquiries</span>
          <h2 class="section-title">Haute Horlogerie & Timepiece FAQ</h2>
          <p class="section-subtitle">Answers regarding meteorite dials, movement maintenance, and bespoke commissions.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; max-width: 1040px; margin: 0 auto;">
          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">How are genuine meteorite dials protected from corrosion?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Each meteorite dial undergoes microscopic ultrasonic cleaning, specialized vacuum rhodium plating, and a sub-micron hydrophobic coating that preserves the metallic Widmanstätten pattern indefinitely without oxidation.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">Why are mechanical watches inspired by desert dunes?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Desert sand dunes represent nature's original sundial, shifting with wind and sunlight. Our dial guilloché motifs mirror these natural wind ripples, pairing organic beauty with mechanical micro-precision.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">What is the recommended service interval for a CosmicDialDune watch?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Due to our advanced synthetic horological oils and silicon hairspring technology, we recommend a complete manufacture service every five to seven years at our New York atelier.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">Can I request a bespoke customized astronomical dial?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Yes. Our master watchmakers accept bespoke commissions, calibrating custom sundial gnomons, sky charts, and celestial constellations to your specific birthplace or observatory latitude.</p>
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
            <div class="logo-badge">⌚</div>
            <div class="brand-title-group">
              <span class="brand-name">CosmicDialDune</span>
              <span class="brand-sub">Haute Horlogerie</span>
            </div>
          </div>
          <p>
            An independent manufacture of luxury mechanical timepieces, meteorite celestial dials, and desert chronometers. Dedicated to the eternal art of horology.
          </p>
        </div>

        <div>
          <h4 class="footer-heading">Timepiece Links</h4>
          <ul class="footer-links">
            <li><a href="index.php">Atelier Home</a></li>
            <li><a href="about.html">Heritage & Craft</a></li>
            <li><a href="blog.html">Horological Journal</a></li>
            <li><a href="#solar-calculator">Solar Dial Configurator</a></li>
            <li><a href="contact.html">Concierge Desk</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Trust & Governance</h4>
          <ul class="footer-links">
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms of Service</a></li>
            <li><a href="disclaimer.html">Horological Disclaimer</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Manufacture Headquarters</h4>
          <p class="footer-contact-text">
            <strong>Atelier Desk:</strong><br>
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
          &copy; <?php echo date('Y'); ?> CosmicDialDune Haute Horlogerie. All rights reserved. Precision time across the cosmos.
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
