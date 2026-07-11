<?php
$pageTitle = 'Guided Breathing | Digital Wellness Platform';

require_once 'data/tips.php';

$dayIndex = (int) date('N') - 1;
$dailyTip = $tips[$dayIndex];

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<main id="main-content">
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">Slow down and reset</p>
            <h1>Guided breathing exercise</h1>
            <p>
                Follow the animated circle as it expands and contracts.
                Breathe slowly and allow yourself to focus on the present moment.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container breathing-layout">
            <section
                class="breathing-panel"
                aria-labelledby="breathing-heading"
            >
                <h2 id="breathing-heading">Follow the breathing circle</h2>

                <p>
                    Inhale as the circle expands, hold briefly, and exhale as
                    it becomes smaller.
                </p>

                <div
                    class="breathing-stage"
                    role="img"
                    aria-label="Animated breathing guide that expands for inhale and contracts for exhale"
                >
                    <div class="breathing-circle">
                        <span class="breathing-text">Breathe</span>
                    </div>
                </div>

                <ol class="breathing-steps">
                    <li>Inhale slowly through your nose.</li>
                    <li>Hold your breath for a comfortable moment.</li>
                    <li>Exhale gently through your mouth.</li>
                    <li>Repeat the cycle several times.</li>
                </ol>
            </section>

            <aside class="daily-tip" aria-labelledby="tip-heading">
                <p class="eyebrow">Today’s wellness tip</p>

                <h2 id="tip-heading">A small step for today</h2>

                <p>
                    <?= htmlspecialchars($dailyTip) ?>
                </p>

                <p class="tip-date">
                    <?= htmlspecialchars(date('l, F j, Y')) ?>
                </p>
            </aside>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>