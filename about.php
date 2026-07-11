<?php
$pageTitle = 'About | Digital Wellness Platform';

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<main id="main-content">
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">Technology with a purpose</p>

            <h1>About Digital Wellness</h1>

            <p>
                Digital Wellness is a responsive PHP platform designed to help
                people build healthier relationships with technology, reflect
                on their emotions, and find trustworthy mental wellness support.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container about-intro">
            <div>
                <p class="eyebrow">Our mission</p>

                <h2>Helping people feel more supported in a digital world</h2>

                <p>
                    Technology is part of everyday life, but constant screen
                    time, notifications, school responsibilities, work pressure,
                    and social media can make it difficult to slow down.
                    Digital Wellness provides a calm space where users can pause,
                    reflect, and practice healthier daily habits.
                </p>

                <p>
                    The platform is especially designed for college students,
                    young adults, and working professionals who may experience
                    stress, emotional pressure, digital fatigue, or burnout.
                </p>

                <p>
                    This website does not replace professional mental health
                    care. Its purpose is to provide educational support,
                    trustworthy resources, and practical wellness activities.
                </p>
            </div>

            <aside class="audience-card" aria-labelledby="audience-heading">
                <p class="eyebrow">Who we support</p>

                <h2 id="audience-heading">Our target audience</h2>

                <ul class="check-list">
                    <li>College students balancing school and personal life</li>
                    <li>Young adults navigating everyday stress</li>
                    <li>Professionals managing work-related burnout</li>
                    <li>People seeking healthier digital habits</li>
                    <li>Anyone looking for trustworthy wellness resources</li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="section section-accent">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">A well-rounded experience</p>
                <h2>How the platform supports digital wellness</h2>

                <p>
                    Each feature was selected to help users take a practical
                    step toward emotional awareness, healthier routines, and
                    more intentional use of technology.
                </p>
            </div>

            <div class="about-feature-grid">
                <article class="about-feature-card">
                    <span class="feature-number" aria-hidden="true">01</span>
                    <h3>Daily Mood Journal</h3>
                    <p>
                        Encourages users to pause, identify their emotions, and
                        reflect on what may be influencing their day.
                    </p>
                </article>

                <article class="about-feature-card">
                    <span class="feature-number" aria-hidden="true">02</span>
                    <h3>Trusted Resources</h3>
                    <p>
                        Organizes reliable mental health and wellness
                        organizations into a clear, accessible directory.
                    </p>
                </article>

                <article class="about-feature-card">
                    <span class="feature-number" aria-hidden="true">03</span>
                    <h3>Self-Care Challenges</h3>
                    <p>
                        Promotes simple habits such as movement, hydration,
                        gratitude, outdoor time, and taking screen breaks.
                    </p>
                </article>

                <article class="about-feature-card">
                    <span class="feature-number" aria-hidden="true">04</span>
                    <h3>Daily Affirmations</h3>
                    <p>
                        Gives users encouraging messages that support patience,
                        confidence, rest, and steady personal progress.
                    </p>
                </article>

                <article class="about-feature-card">
                    <span class="feature-number" aria-hidden="true">05</span>
                    <h3>Guided Breathing</h3>
                    <p>
                        Uses calm visual motion to guide users through a simple
                        breathing cycle without distracting JavaScript.
                    </p>
                </article>

                <article class="about-feature-card">
                    <span class="feature-number" aria-hidden="true">06</span>
                    <h3>Responsive Access</h3>
                    <p>
                        Provides an intentional experience across phones,
                        tablets, laptops, and desktop computers.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container technology-layout">
            <div>
                <p class="eyebrow">Engineering Decisionss</p>

                <h2>Built using modern, maintainable web technologies</h2>

                <p>
                    Digital Wellness combines semantic HTML5, responsive CSS3,
                    and server-side PHP to deliver a clean, accessible, and maintainable web application.
                    Shared PHP includes reduce duplicated code, reusable arrays generate dynamic content,
                    and PHP sessions provide personalized user experiences while keeping the application organized and scalable.
                </p>

                <div class="technology-list" aria-label="Technologies used">
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>PHP</span>
                    <span>PHP Sessions</span>
                    <span>PHP Arrays</span>
                    <span>CSS Grid</span>
                    <span>Flexbox</span>
                    <span>CSS Custom Properties</span>
                    <span>Responsive Design</span>
                    <span>GitHub</span>
                </div>
            </div>

            <div class="engineering-grid">
                <article class="engineering-card">
                    <h3>Reusable PHP Includes</h3>
                    <p>
                        The header, navigation, and footer are shared across
                        pages using PHP <code>include()</code> or
                        <code>require_once</code>.
                    </p>
                </article>

                <article class="engineering-card">
                    <h3>Dynamic PHP Content</h3>
                    <p>
                        Resource cards and daily wellness tips are generated
                        from reusable PHP arrays instead of duplicated markup.
                    </p>
                </article>

                <article class="engineering-card">
                    <h3>CSS-Only Interaction</h3>
                    <p>
                        Checkbox states, the progress tracker, and affirmation
                        carousel work without front-end JavaScript.
                    </p>
                </article>

                <article class="engineering-card">
                    <h3>Responsive Architecture</h3>
                    <p>
                        CSS Grid, Flexbox, fluid sizing, and meaningful
                        breakpoints adapt the content across screen sizes.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="section section-dark">
        <div class="container accessibility-layout">
            <div>
                <p class="eyebrow eyebrow-light">Inclusive by design</p>

                <h2>Accessibility is part of the experience</h2>

                <p>
                    A wellness platform should not create additional barriers.
                    Accessibility was considered throughout the structure,
                    styling, interaction, and responsive testing process.
                </p>
            </div>

            <ul class="accessibility-list">
                <li>Semantic HTML5 landmarks and page structure</li>
                <li>Keyboard-accessible links, forms, and controls</li>
                <li>Visible focus indicators for interactive elements</li>
                <li>Readable typography and spacing</li>
                <li>High-contrast text and background combinations</li>
                <li>Reduced-motion support for animated content</li>
                <li>Responsive layouts for mobile, tablet, and desktop</li>
                <li>Clear labels and instructions on form controls</li>
            </ul>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Meet the team</p>
                <h2>Designed and developed collaboratively</h2>

                <p>
                    Our responsibilities were divided around project leadership,
                    development, testing, documentation, and presentation
                    preparation.
                </p>
            </div>

            <div class="team-grid">
                <article class="team-card">
                    <p class="team-role">Project Lead</p>
                    <h3>Darin Ward</h3>

                    <ul>
                        <li>Project planning and scope control</li>
                        <li>GitHub repository management</li>
                        <li>PHP architecture and development</li>
                        <li>Mood journal and resource directory</li>
                        <li>Responsive design and integration</li>
                        <li>README, QA, and final packaging</li>
                    </ul>
                </article>

                <article class="team-card">
                    <p class="team-role">Developer & QA Support</p>
                    <h3>Koffi Djokoe</h3>

                    <ul>
                        <li>Assigned page and content support</li>
                        <li>CSS feature assistance</li>
                        <li>Responsive layout testing</li>
                        <li>Accessibility and QA review</li>
                        <li>Documentation support</li>
                        <li>Presentation slides and demo preparation</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container reflection-card">
            <p class="eyebrow">Project reflection</p>

            <h2>What we learned</h2>

            <p>
                Developing Digital Wellness strengthened our understanding of
                PHP form processing, sessions, reusable includes, dynamic arrays,
                CSS-only interaction, responsive layouts, accessibility, and
                collaborative GitHub workflows.
            </p>

            <p>
                It also demonstrated that technical decisions should support the
                needs of the audience. Every feature, layout, and interaction
                was designed to make the platform feel calm, understandable,
                and useful rather than overwhelming.
            </p>

            <p class="reflection-quote">
                Better digital habits can begin with one intentional moment.
            </p>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>