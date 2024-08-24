<div id="settings-view" class="view">
    <h1>Settings</h1>
    <form id="api-key-form">
        <label for="api-key">OpenAI API Key:</label>
        <input type="password" id="api-key" name="api_key" value="<?= htmlspecialchars($apiKey) ?>" required>
        <button type="submit">Save API Key</button>
    </form>
    <p>
        Don't have an API key? 
        <a href="https://platform.openai.com/signup" target="_blank" rel="noopener noreferrer">
            Get one here
        </a>
    </p>
    <div class="danger-zone">
        <h2>Danger Zone</h2>
        <button id="delete-data" class="danger">Delete All Data</button>
    </div>
</div>