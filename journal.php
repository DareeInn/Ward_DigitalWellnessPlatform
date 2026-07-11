<?php
session_start();

$pageTitle = 'Mood Journal | Digital Wellness Platform';

$mood = '';
$reflection = '';
$errors = [];
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mood = trim($_POST['mood'] ?? '');
    $reflection = trim($_POST['reflection'] ?? '');

    $allowedMoods = [
        'Great',
        'Good',
        'Okay',
        'Stressed',
        'Sad'
    ];

    if ($mood === '') {
        $errors[] = 'Please select how you are feeling today.';
    } elseif (!in_array($mood, $allowedMoods, true)) {
        $errors[] = 'Please select a valid mood option.';
    }

    if ($reflection === '') {
        $errors[] = 'Please enter a short reflection.';
    } elseif (strlen($reflection) < 10) {
        $errors[] = 'Your reflection should be at least 10 characters.';
    } elseif (strlen($reflection) > 500) {
        $errors[] = 'Your reflection cannot be longer than 500 characters.';
    }

    if (empty($errors)) {
        $_SESSION['mood'] = [
            'mood' => $mood,
            'reflection' => $reflection,
            'date' => date('F j, Y')
        ];

        $successMessage = 'Your daily check-in was saved successfully.';
    }
}

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<main id="main-content">
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">Pause and reflect</p>
            <h1>Daily mood journal</h1>
            <p>
                Take a moment to identify how you are feeling and write a short
                reflection about your day.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container journal-layout">
            <div class="journal-panel">
                <h2>How are you feeling today?</h2>

                <?php if (!empty($errors)): ?>
                    <div
                        class="form-message form-message-error"
                        role="alert"
                        aria-labelledby="error-heading"
                    >
                        <h3 id="error-heading">Please correct the following:</h3>

                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?= htmlspecialchars($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if ($successMessage !== ''): ?>
                    <div
                        class="form-message form-message-success"
                        role="status"
                    >
                        <p><?= htmlspecialchars($successMessage) ?></p>
                    </div>
                <?php endif; ?>

                <form method="post" action="journal.php" class="journal-form">
                    <fieldset>
                        <legend>Select your current mood</legend>

                        <div class="mood-options">
                            <?php
                            $moodOptions = [
                                'Great',
                                'Good',
                                'Okay',
                                'Stressed',
                                'Sad'
                            ];
                            ?>

                            <?php foreach ($moodOptions as $option): ?>
                                <label class="mood-option">
                                    <input
                                        type="radio"
                                        name="mood"
                                        value="<?= htmlspecialchars($option) ?>"
                                        <?= $mood === $option ? 'checked' : '' ?>
                                        required
                                    >
                                    <span><?= htmlspecialchars($option) ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label for="reflection">
                            What is on your mind today?
                        </label>

                        <textarea
                            id="reflection"
                            name="reflection"
                            rows="7"
                            maxlength="500"
                            required
                            aria-describedby="reflection-help"
                        ><?= htmlspecialchars($reflection) ?></textarea>

                        <p id="reflection-help" class="form-help">
                            Write between 10 and 500 characters.
                        </p>
                    </div>

                    <button class="button button-primary" type="submit">
                        Save My Check-In
                    </button>
                </form>
            </div>

            <aside class="journal-summary" aria-labelledby="summary-heading">
                <h2 id="summary-heading">Today’s check-in</h2>

                <?php if (isset($_SESSION['mood'])): ?>
                    <p>
                        <strong>Mood:</strong>
                        <?= htmlspecialchars($_SESSION['mood']['mood']) ?>
                    </p>

                    <p>
                        <strong>Date:</strong>
                        <?= htmlspecialchars($_SESSION['mood']['date']) ?>
                    </p>

                    <p>
                        <strong>Reflection:</strong>
                    </p>

                    <blockquote>
                        <?= nl2br(
                            htmlspecialchars($_SESSION['mood']['reflection'])
                        ) ?>
                    </blockquote>
                <?php else: ?>
                    <p>
                        Your latest journal entry will appear here after you
                        complete the form.
                    </p>
                <?php endif; ?>
            </aside>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>