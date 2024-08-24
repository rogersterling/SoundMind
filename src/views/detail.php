<div class="mb-4">
    <a href="/" class="text-blue-500 hover:underline">&larr; Back to entries</a>
</div>
<h1 class="text-2xl font-bold mb-4"><?= htmlspecialchars($entry['title']) ?></h1>
<p class="text-sm text-gray-600 mb-4"><?= htmlspecialchars($entry['date']) ?></p>
<div class="bg-white rounded-lg shadow p-4">
    <p><?= nl2br(htmlspecialchars($entry['content'])) ?></p>
</div>