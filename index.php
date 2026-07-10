<?php
$pageTitle = 'Home | Digital Wellness Platform';

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<main id="main-content">
    <section class="hero">
        <div class="container">
            <p class="eyebrow">Your daily space for wellness</p>

            <h1>Take a moment to check in with yourself.</h1>

            <p class="hero-text">
                Explore trusted resources, reflect on your mood, and practice
                simple self-care activities designed to support everyday well-being.
            </p>

            <div class="hero-actions">
                <a class="button button-primary" href="journal.php">
                    Start Your Check-In
                </a>

                <a class="button button-secondary" href="resources.php">
                    Explore Resources
                </a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2>Support for your daily wellness</h2>

            <div class="feature-grid">
                <article class="feature-card">
                    <h3>Mood Journal</h3>
                    <p>
                        Record how you are feeling and receive a personalized
                        confirmation after your daily check-in.
                    </p>
                </article>

                <article class="feature-card">
                    <h3>Wellness Resources</h3>
                    <p>
                        Find trusted support services, guides, and tools organized
                        in one easy-to-use directory.
                    </p>
                </article>

                <article class="feature-card">
                    <h3>Self-Care Activities</h3>
                    <p>
                        Practice affirmations, complete simple challenges, and
                        follow a calming guided breathing exercise.
                    </p>
                </article>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>