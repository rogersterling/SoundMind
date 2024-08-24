// SoundMind App JavaScript

// Wrap everything in an IIFE to avoid global scope pollution
(function() {
    // DOM Elements
    const navDots = document.querySelectorAll('.nav-dot');
    const views = ['home', 'insights', 'settings'];
    let currentView = 'home';

    // Main app object
    const app = {
        init: function() {
            this.setupEventListeners();
            this.setupSettingsEventListeners();
            this.navigateTo('home');
        },

        // Navigation
        navigateTo: function(view) {
            if (!views.includes(view)) return;
            
            views.forEach(v => {
                const viewElement = document.getElementById(`${v}-view`);
                if (viewElement) viewElement.classList.add('hidden');
            });

            const newViewElement = document.getElementById(`${view}-view`);
            if (newViewElement) newViewElement.classList.remove('hidden');

            currentView = view;
            this.updateActiveNavDot(view);
        },

        updateActiveNavDot: function(view) {
            navDots.forEach(dot => {
                dot.classList.remove('active');
                if (dot.dataset.view === view) {
                    dot.classList.add('active');
                }
            });
        },

        setupEventListeners: function() {
            navDots.forEach(dot => {
                dot.addEventListener('click', () => {
                    const view = dot.dataset.view;
                    this.navigateTo(view);
                });
            });

            const recordBtn = document.getElementById('record-btn');
            const uploadBtn = document.getElementById('upload-btn');

            recordBtn.addEventListener('click', function() {
                console.log('Record button clicked');
                // Implement record functionality here
            });

            uploadBtn.addEventListener('click', function() {
                console.log('Upload button clicked');
                // Implement upload functionality here
            });
        },

        setupSettingsEventListeners: function() {
            const apiKeyForm = document.getElementById('api-key-form');
            const deleteDataBtn = document.getElementById('delete-data');

            apiKeyForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const apiKey = document.getElementById('api-key').value;
                this.saveApiKey(apiKey);
            });

            deleteDataBtn.addEventListener('click', () => {
                if (confirm('Are you sure you want to delete all your data? This action cannot be undone.')) {
                    this.deleteAllData();
                }
            });
        },

        saveApiKey: function(apiKey) {
            fetch('/settings/save-api-key', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `api_key=${encodeURIComponent(apiKey)}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('API key saved successfully');
                } else {
                    alert('Failed to save API key');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while saving the API key');
            });
        },

        deleteAllData: function() {
            fetch('/settings/delete-data', {
                method: 'POST'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('All data has been deleted');
                    this.navigateTo('home');
                } else {
                    alert('Failed to delete data');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while deleting data');
            });
        }
    };

    // Initialize the app when the DOM is loaded
    document.addEventListener('DOMContentLoaded', () => app.init());
})();