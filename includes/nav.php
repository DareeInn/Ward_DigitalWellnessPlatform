<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$navigationItems = [
    'index.php' => 'Home',
    'resources.php' => 'Resources',
    'journal.php' => 'Mood Journal',
    'selfcare.php' => 'Self-Care',
    'breathing.php' => 'Guided Breathing',
    'about.php' => 'About'
];
?>

<nav class="site-nav" aria-label="Primary navigation">
    <div class="container">
        <ul class="nav-list">
            <?php foreach ($navigationItems as $file => $label): ?>
                <li>
                    <a
                        href="<?= htmlspecialchars($file) ?>"
                        <?= $currentPage === $file
                            ? 'class="active" aria-current="page"'
                            : '' ?>
                    >
                        <?= htmlspecialchars($label) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>