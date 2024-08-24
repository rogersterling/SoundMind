<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundMind</title>
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>
    <div id="app" class="app-container">
        <?php if ($currentPage !== 'detail'): ?>
        <nav class="nav-dots">
            <a href="/" class="nav-dot <?= $currentPage === 'home' ? 'active' : '' ?>"></a>
            <a href="/insights" class="nav-dot <?= $currentPage === 'insights' ? 'active' : '' ?>"></a>
            <a href="/settings" class="nav-dot <?= $currentPage === 'settings' ? 'active' : '' ?>"></a>
        </nav>
        <?php endif; ?>

        <main class="main-content">
            <?= $content ?>
        </main>

        <div id="record-upload-bar" class="record-upload-bar">
            <button id="record-btn">Record</button>
            <button id="upload-btn">Upload</button>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>