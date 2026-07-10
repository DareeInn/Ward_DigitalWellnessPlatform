<?php
$pageTitle = $pageTitle ?? 'Digital Wellness Platform';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        name="description"
        content="A digital wellness platform with mental health resources, mood journaling, and self-care tools."
    >
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a class="skip-link" href="#main-content">Skip to main content</a>

<header class="site-header">
    <div class="container">
        <a class="site-logo" href="index.php">
            Digital Wellness
        </a>
    </div>
</header>