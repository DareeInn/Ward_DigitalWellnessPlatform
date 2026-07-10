<?php
$pageTitle = 'Resources | Digital Wellness Platform';

require_once 'data/resources.php';
require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<main id="main-content">
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">Trusted support in one place</p>
            <h1>Mental wellness resources</h1>
            <p>
                Browse crisis support, educational tools, wellness guides, and
                community organizations that can help you take the next step.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="resource-grid">
                <?php foreach ($resources as $resource): ?>
                    <article class="resource-card">
                        <p class="resource-type">
                            <?= htmlspecialchars($resource['type']) ?>
                        </p>

                        <h2>
                            <?= htmlspecialchars($resource['title']) ?>
                        </h2>

                        <p>
                            <?= htmlspecialchars($resource['description']) ?>
                        </p>

                        <a
                            class="resource-link"
                            href="<?= htmlspecialchars($resource['url']) ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Visit Resource
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>

            <aside class="crisis-notice" aria-labelledby="crisis-heading">
                <h2 id="crisis-heading">Need immediate help?</h2>
                <p>
                    If you or someone else is in immediate danger, call 911.
                    In the United States, call or text 988 for crisis support.
                </p>
            </aside>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>