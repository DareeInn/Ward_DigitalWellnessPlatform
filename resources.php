<?php
require_once 'includes/header.php';
require_once 'includes/nav.php';
require_once 'data/resources.php';
?>

<main>
    <h1>Resources</h1>
    <ul>
        <?php foreach ($resources as $r): ?>
            <li><a href="<?php echo htmlspecialchars($r['link']); ?>"><?php echo htmlspecialchars($r['title']); ?></a></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php
require_once 'includes/footer.php';
?>
