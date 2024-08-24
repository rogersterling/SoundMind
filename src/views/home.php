<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1 class="text-2xl font-bold mb-4">SoundMind</h1>
    <div class="space-y-4">
        <?php foreach ($entries as $entry): ?>
            <a href="/entry/<?= $entry['id'] ?>" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center">
                    <div class="w-2 h-full <?= $entry['sentiment'] === 'positive' ? 'bg-green-500' : 'bg-red-500' ?> mr-4"></div>
                    <div>
                        <h2 class="font-semibold"><?= htmlspecialchars($entry['title']) ?></h2>
                        <p class="text-sm text-gray-600"><?= htmlspecialchars($entry['date']) ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</body>
</html>