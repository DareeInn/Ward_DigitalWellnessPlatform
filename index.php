<?php
$pageTitle = 'Home | Digital Wellness Platform';

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<main id="main-content">
    <section class="hero">
        <div class="container hero-layout">
            <div class="hero-content">
                <p class="eyebrow">Your daily space for wellness</p>

                <h1>Take a moment to check in with yourself.</h1>

                <p class="hero-text">
                    Explore trusted resources, reflect on your mood, and practice
                    simple self-care activities designed to support everyday
                    well-being.
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

            <aside class="hero-summary" aria-labelledby="summary-title">
                <p class="eyebrow">Built for everyday balance</p>

                <h2 id="summary-title">Wellness tools in one calm space</h2>

                <ul class="hero-check-list">
                    <li>Private session-based mood reflection</li>
                    <li>Trusted mental wellness resources</li>
                    <li>CSS-only self-care challenges</li>
                    <li>Guided breathing and daily tips</li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Why Digital Wellness?</p>
                <h2>Practical support for your daily routine</h2>

                <p>
                    Each part of the platform helps users slow down, reflect,
                    and take a manageable step toward healthier habits.
                </p>
            </div>

            <div class="feature-grid">
                <article class="feature-card">
                    <p class="feature-label">Reflect</p>
                    <h3>Build self-awareness</h3>

                    <p>
                        Record your mood and write a short reflection to better
                        understand what may be influencing your day.
                    </p>

                    <a href="journal.php">Open the Mood Journal</a>
                </article>

                <article class="feature-card">
                    <p class="feature-label">Practice</p>
                    <h3>Develop mindful habits</h3>

                    <p>
                        Complete self-care challenges, read affirmations, and
                        follow a calming breathing exercise.
                    </p>

                    <a href="selfcare.php">Explore Self-Care</a>
                </article>

                <article class="feature-card">
                    <p class="feature-label">Connect</p>
                    <h3>Find trusted support</h3>

                    <p>
                        Browse reliable mental health organizations, crisis
                        support, educational tools, and community resources.
                    </p>

                    <a href="resources.php">Browse Resources</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section stats-section" aria-labelledby="stats-heading">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Platform overview</p>
                <h2 id="stats-heading">A focused wellness experience</h2>
            </div>

            <div class="stats-grid">
                <article class="stat-card">
                    <strong>6</strong>
                    <span>Meaningful Pages</span>
                </article>

                <article class="stat-card">
                    <strong>6</strong>
                    <span>Trusted Resources</span>
                </article>

                <article class="stat-card">
                    <strong>3</strong>
                    <span>Responsive Layouts</span>
                </article>

                <article class="stat-card">
                    <strong>0</strong>
                    <span>JavaScript Files</span>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container home-cta">
            <p class="eyebrow">Start with one small step</p>

            <h2>Ready to begin your wellness journey?</h2>

            <p>
                Small daily habits can lead to meaningful long-term change.
                Reflect on your day, explore trusted resources, and build a
                healthier relationship with technology.
            </p>

            <div class="hero-actions home-cta-actions">
                <a class="button button-primary" href="journal.php">
                    Start Journal
                </a>

                <a class="button button-secondary" href="breathing.php">
                    Try Guided Breathing
                </a>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>