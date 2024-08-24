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
        <nav class="nav-dots">
            <span class="nav-dot <?= $currentPage === 'home' ? 'active' : '' ?>" data-view="home"></span>
            <span class="nav-dot <?= $currentPage === 'insights' ? 'active' : '' ?>" data-view="insights"></span>
            <span class="nav-dot <?= $currentPage === 'settings' ? 'active' : '' ?>" data-view="settings"></span>
        </nav>

        <div id="home-view" class="view <?= $currentPage !== 'home' ? 'hidden' : '' ?>">
            <?php include __DIR__ . '/home.php'; ?>
        </div>

        <div id="insights-view" class="view <?= $currentPage !== 'insights' ? 'hidden' : '' ?>">
            <?php include __DIR__ . '/insights.php'; ?>
        </div>

        <div id="settings-view" class="view <?= $currentPage !== 'settings' ? 'hidden' : '' ?>">
            <?php include __DIR__ . '/settings.php'; ?>
        </div>

        <div id="record-upload-bar" class="record-upload-bar">
            <button id="record-btn">Record</button>
            <button id="upload-btn">Upload</button>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>