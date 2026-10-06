
<section id="home" class="hero section">
    <div class="hero-copy reveal">
        <p class="eyebrow">SYSTEM ONLINE // PORTFOLIO</p>

        <h1>Kennen Christopher <span>Callejo</span></h1>

        <h2><?= htmlspecialchars($site["title"]) ?></h2>

        <p class="hero-text">
            Welcome to my personal portfolio. This site presents my background,
            education, projects, design interests, and the technologies I use
            to build digital experiences.
        </p>

        <div class="hero-actions">
            <a class="btn primary" href="#projects">View Projects</a>
            <a class="btn ghost" href="#contact">Contact Me</a>
        </div>
    </div>

    <div class="monarch-card reveal">
        <div class="rank">RANK: <strong>S</strong></div>

        <div class="profile-container">
            <div class="profile-glow"></div>
            <img src="assets/images/profile.jpg"
                 alt="<?= htmlspecialchars($site["name"]) ?>"
                 class="profile-image">
            <div class="profile-ring"></div>
        </div>

        <p class="status">SHADOW MONARCH MODE</p>
        <small>LEVEL <span id="level">01</span> // XP <span id="xp">000</span></small>
    </div>
</section>
