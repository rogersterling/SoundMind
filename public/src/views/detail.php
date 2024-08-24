<div id="detail-view" class="view">
    <button id="back-to-home" class="back-button">&larr; Back to Home</button>
    <h2>Journal Entry Details</h2>
    <div class="entry-details">
        <p><strong>Date:</strong> <?php echo $entry['date']; ?></p>
        <p><strong>Mood:</strong> <?php echo $entry['mood']; ?></p>
        <p><strong>Summary:</strong> <?php echo $entry['summary']; ?></p>
        <audio controls>
            <source src="<?php echo $entry['audio_url']; ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
</div>