// SoundMind App JavaScript

// DOM Elements
const app = document.getElementById('app');
const navDots = document.querySelectorAll('.nav-dot');
const recordUploadBar = document.getElementById('record-upload-bar');

// Views
const views = ['home', 'insights', 'settings'];
let currentView = 'home';

// Navigation
function navigateTo(view) {
    if (!views.includes(view)) return;
    
    // Hide all views
    views.forEach(v => {
        const viewElement = document.getElementById(`${v}-view`);
        if (viewElement) viewElement.classList.add('hidden');
    });

    // Show the selected view
    const newViewElement = document.getElementById(`${view}-view`);
    if (newViewElement) newViewElement.classList.remove('hidden');

    currentView = view;
    updateActiveNavDot(view);
}

function updateActiveNavDot(view) {
    navDots.forEach(dot => {
        dot.classList.remove('active');
        if (dot.dataset.view === view) {
            dot.classList.add('active');
        }
    });
}

// Initialize App
function initApp() {
    setupEventListeners();
    setupSettingsEventListeners();
    // Show the initial view (home)
    navigateTo('home');
}

// Event Listeners
function setupEventListeners() {
    navDots.forEach(dot => {
        dot.addEventListener('click', function() {
            const view = this.dataset.view;
            navigateTo(view);
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
}

function setupSettingsEventListeners() {
    const apiKeyForm = document.getElementById('api-key-form');
    const deleteDataBtn = document.getElementById('delete-data');

    apiKeyForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const apiKey = document.getElementById('api-key').value;
        saveApiKey(apiKey);
    });

    deleteDataBtn.addEventListener('click', function() {
        if (confirm('Are you sure you want to delete all your data? This action cannot be undone.')) {
            deleteAllData();
        }
    });
}

function saveApiKey(apiKey) {
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
}

function deleteAllData() {
    fetch('/settings/delete-data', {
        method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('All data has been deleted');
            // Redirect to home page or refresh the app
            navigateTo('home');
        } else {
            alert('Failed to delete data');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while deleting data');
    });
}

// Initialize the app when the DOM is loaded
document.addEventListener('DOMContentLoaded', initApp);