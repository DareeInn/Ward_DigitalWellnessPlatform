<?php
$pageTitle = 'Self-Care | Digital Wellness Platform';

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<main id="main-content">
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">Small steps still matter</p>
            <h1>Daily self-care</h1>
            <p>
                Complete a few simple wellness activities and explore
                affirmations designed to encourage a healthier daily routine.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container selfcare-layout">
            <section class="selfcare-panel" aria-labelledby="challenge-heading">
                <h2 id="challenge-heading">Today’s self-care challenge</h2>

                <p>
                    Check each activity as you complete it. Your progress will
                    update visually using CSS only.
                </p>

                <div class="challenge-list">
                    <label class="challenge-item">
                        <input type="checkbox">
                        <span>Drink a full glass of water</span>
                    </label>

                    <label class="challenge-item">
                        <input type="checkbox">
                        <span>Stretch or move for 10 minutes</span>
                    </label>

                    <label class="challenge-item">
                        <input type="checkbox">
                        <span>Take a short walk outside</span>
                    </label>

                    <label class="challenge-item">
                        <input type="checkbox">
                        <span>Write down one thing you are grateful for</span>
                    </label>

                    <label class="challenge-item">
                        <input type="checkbox">
                        <span>Step away from your screen for 15 minutes</span>
                    </label>
                </div>

                <div class="progress-area" aria-label="Self-care progress">
                    <p class="progress-label">Complete activities to build progress.</p>
                    <div class="progress-track">
                        <div class="progress-fill"></div>
                    </div>
                </div>
            </section>

            <section class="affirmation-panel" aria-labelledby="affirmation-heading">
                <h2 id="affirmation-heading">Daily affirmations</h2>

                <div class="affirmation-carousel">
                    <input
                        type="radio"
                        name="affirmation"
                        id="affirmation-1"
                        checked
                    >
                    <input
                        type="radio"
                        name="affirmation"
                        id="affirmation-2"
                    >
                    <input
                        type="radio"
                        name="affirmation"
                        id="affirmation-3"
                    >

                    <div class="affirmation-slides">
                        <blockquote class="affirmation-slide slide-1">
                            “Small progress is still progress.”
                        </blockquote>

                        <blockquote class="affirmation-slide slide-2">
                            “Rest is part of becoming stronger.”
                        </blockquote>

                        <blockquote class="affirmation-slide slide-3">
                            “You are allowed to take life one step at a time.”
                        </blockquote>
                    </div>

                    <div class="affirmation-controls" aria-label="Choose affirmation">
                        <label for="affirmation-1">
                            <span class="visually-hidden">Show affirmation one</span>
                        </label>

                        <label for="affirmation-2">
                            <span class="visually-hidden">Show affirmation two</span>
                        </label>

                        <label for="affirmation-3">
                            <span class="visually-hidden">Show affirmation three</span>
                        </label>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>