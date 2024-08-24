<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundMind - Home</title>
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div id="app" class="max-w-md mx-auto bg-white shadow-lg min-h-screen relative">
        <div id="home-view" class="p-4 pb-36">
            <h1 class="text-2xl font-bold mb-4">SoundMind</h1>
            <div id="entry-list" class="space-y-4">
                <?php foreach ($entries as $entry): ?>
                    <div class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow duration-200 border-l-4 <?= $entry['sentiment'] === 'positive' ? 'border-green-500' : 'border-red-500' ?>">
                        <div class="flex flex-col">
                            <h2 class="font-semibold"><?= htmlspecialchars($entry['title']) ?></h2>
                            <p class="text-sm text-gray-600 mb-2"><?= htmlspecialchars($entry['date']) ?></p>
                            <p class="text-sm"><?= htmlspecialchars($entry['briefSummary']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="nav-dots" class="fixed bottom-28 left-0 right-0 flex justify-center space-x-3 p-2">
            <span class="nav-dot active" data-view="home"></span>
            <span class="nav-dot" data-view="insights"></span>
            <span class="nav-dot" data-view="settings"></span>
        </div>
        <div id="record-upload-bar" class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 flex justify-around items-center h-24">
            <button id="record-btn" class="flex-1 py-4 text-center font-medium">Record</button>
            <div class="w-px bg-gray-200 h-12"></div>
            <button id="upload-btn" class="flex-1 py-4 text-center font-medium">Upload</button>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>