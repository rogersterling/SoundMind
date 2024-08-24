<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundMind - Home</title>
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>
    <div id="app" class="app-container">
        <div id="home-view" class="home-view">
            <h1 class="app-title">SoundMind</h1>
            <div id="entry-list" class="entry-list">
                <?php if (isset($entries) && is_array($entries)): ?>
                    <?php foreach ($entries as $entry): ?>
                        <div class="entry-item <?= $entry['sentiment'] === 'positive' ? 'positive' : 'negative' ?>">
                            <h2 class="entry-title"><?= htmlspecialchars($entry['title']) ?></h2>
                            <p class="entry-date"><?= htmlspecialchars($entry['date']) ?></p>
                            <p class="entry-summary"><?= htmlspecialchars($entry['briefSummary']) ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No entries found.</p>
                <?php endif; ?>
            </div>
        </div>
        <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot active" data-view="home"></span>
            <span class="nav-dot" data-view="insights"></span>
            <span class="nav-dot" data-view="settings"></span>
        </nav>
        <div id="record-upload-bar" class="record-upload-bar">
            <button id="record-btn">Record</button>
            <button id="upload-btn">Upload</button>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>