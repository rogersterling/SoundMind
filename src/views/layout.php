<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundMind</title>
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div id="app" class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <?php if ($currentPage !== 'detail'): ?>
        <nav class="flex justify-center space-x-4 py-4">
            <a href="/" class="nav-dot <?= $currentPage === 'home' ? 'active' : '' ?>"></a>
            <a href="/insights" class="nav-dot <?= $currentPage === 'insights' ? 'active' : '' ?>"></a>
            <a href="/settings" class="nav-dot <?= $currentPage === 'settings' ? 'active' : '' ?>"></a>
        </nav>
        <?php endif; ?>

        <main class="p-4">
            <?= $content ?>
        </main>

        <div id="record-upload-bar" class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 flex justify-around items-center h-20">
            <button id="record-btn" class="w-1/2 h-full text-center">Record</button>
            <button id="upload-btn" class="w-1/2 h-full text-center border-l border-gray-200">Upload</button>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>