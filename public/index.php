<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundMind</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100 min-h-screen">
    <div id="app" class="max-w-md mx-auto bg-white shadow-lg min-h-screen relative">
        <div id="home-view" class="p-4 pb-36">
            <h1 class="text-2xl font-bold mb-4">SoundMind</h1>
            <!-- Home view content will be dynamically inserted here -->
        </div>
        <div id="insights-view" class="p-4 pb-36 hidden">
            <h2 class="text-2xl font-bold mb-4">Insights</h2>
            <!-- Insights view content will be dynamically inserted here -->
        </div>
        <div id="settings-view" class="p-4 pb-36 hidden">
            <h2 class="text-2xl font-bold mb-4">Settings</h2>
            <!-- Settings view content will be dynamically inserted here -->
        </div>
        <div id="nav-dots" class="fixed bottom-28 left-0 right-0 flex justify-center space-x-3 p-2">
            <span class="w-3 h-3 rounded-full bg-gray-300" data-view="home"></span>
            <span class="w-3 h-3 rounded-full bg-gray-300" data-view="insights"></span>
            <span class="w-3 h-3 rounded-full bg-gray-300" data-view="settings"></span>
        </div>
        <div id="record-upload-bar" class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 flex justify-around items-center h-24">
            <button id="record-btn" class="flex-1 py-4 text-center font-medium">Record</button>
            <div class="w-px bg-gray-200 h-12"></div>
            <button id="upload-btn" class="flex-1 py-4 text-center font-medium">Upload</button>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>