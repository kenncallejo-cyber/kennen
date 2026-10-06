
<section id="projects" class="section">
    <div class="section-heading reveal">
        <p class="eyebrow">03 // QUEST LOG</p>
        <h2>Featured <span>Projects</span></h2>
    </div>

    <div class="project-grid">
        <?php foreach ($projects as $index => $project): ?>
            <article class="project-card reveal">
                <div class="project-top">
                    <span class="project-number">
                        <?= str_pad($index + 1, 2, "0", STR_PAD_LEFT) ?>
                    </span>

                    <span class="quest-status">COMPLETED</span>
                </div>

                <h3><?= htmlspecialchars($project["name"]) ?></h3>

                <p><?= htmlspecialchars($project["description"]) ?></p>

                <div class="tags">
                    <?php foreach ($project["tech"] as $tech): ?>
                        <span><?= htmlspecialchars($tech) ?></span>
                    <?php endforeach; ?>
                </div>

                <a href="#contact" class="project-link">View Quest →</a>
            </article>
        <?php endforeach; ?>
    </div>

    <p class="edit-note">
        Edit <code>config.php</code> to add or change your projects.
    </p>
</section>
