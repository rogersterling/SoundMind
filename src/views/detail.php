<div class="back-link">
    <a href="/" class="back-button">&larr; Back to entries</a>
</div>
<h1 class="entry-title"><?= htmlspecialchars($entry['title']) ?></h1>
<p class="entry-date"><?= htmlspecialchars($entry['date']) ?></p>
<div class="entry-content">
    <p><?= nl2br(htmlspecialchars($entry['content'])) ?></p>
</div>