
<section id="skills" class="section">
    <div class="section-heading reveal">
        <p class="eyebrow">04 // ABILITIES</p>
        <h2>Tech <span>Stack</span></h2>
    </div>

    <div class="skills-grid">
        <?php foreach ($skills as $skill): ?>
            <div class="skill reveal">
                <span><?= htmlspecialchars($skill["name"]) ?></span>
                <div class="bar">
                    <i style="width:<?= (int)$skill["level"] ?>%"></i>
                </div>
                <b><?= (int)$skill["level"] ?>%</b>
            </div>
        <?php endforeach; ?>
    </div>
</section>
