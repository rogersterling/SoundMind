// SoundMind App JavaScript

// DOM Elements
const app = document.getElementById('app');
const navDots = document.getElementById('nav-dots');
const recordUploadBar = document.getElementById('record-upload-bar');

// Views
const views = ['home', 'detail', 'insights', 'settings'];
let currentView = 'home';

// Navigation
function navigateTo(view) {
    if (!views.includes(view)) return;
    currentView = view;
    updateView();
    updateNavDots();
}

function updateView() {
    // Hide all views
    views.forEach(v => {
        const viewElement = document.getElementById(`${v}-view`);
        if (viewElement) viewElement.style.display = 'none';
    });

    // Show current view
    const currentViewElement = document.getElementById(`${currentView}-view`);
    if (currentViewElement) currentViewElement.style.display = 'block';

    // Load view content
    loadViewContent(currentView);
}

function updateNavDots() {
    navDots.innerHTML = '';
    views.forEach(view => {
        const dot = document.createElement('span');
        dot.classList.add('nav-dot');
        if (view === currentView) dot.classList.add('active');
        dot.addEventListener('click', () => navigateTo(view));
        navDots.appendChild(dot);
    });
}

// AJAX Functions
async function loadViewContent(view) {
    try {
        const response = await fetch(`/api/${view}`);
        if (!response.ok) throw new Error('Network response was not ok');
        const contentType = response.headers.get("content-type");
        if (contentType && contentType.indexOf("application/json") !== -1) {
            const data = await response.json();
            updateViewWithData(view, data);
        } else {
            console.log("API not ready, received non-JSON response");
            // Optionally, load some dummy data or show a "Coming Soon" message
        }
    } catch (error) {
        console.error('Error loading view content:', error);
        // Optionally, show an error message to the user
    }
}

function updateViewWithData(view, data) {
    const viewElement = document.getElementById(`${view}-view`);
    if (!viewElement) return;

    switch (view) {
        case 'home':
            updateHomeView(viewElement, data);
            break;
        case 'detail':
            updateDetailView(viewElement, data);
            break;
        case 'insights':
            updateInsightsView(viewElement, data);
            break;
        case 'settings':
            updateSettingsView(viewElement, data);
            break;
    }
}

// View Update Functions
function updateHomeView(element, data) {
    // Implement home view update logic
}

function updateDetailView(element, data) {
    // Implement detail view update logic
}

function updateInsightsView(element, data) {
    // Implement insights view update logic
}

function updateSettingsView(element, data) {
    // Implement settings view update logic
}

// Record/Upload Bar
function initRecordUploadBar() {
    // Implement record/upload bar initialization
}

// Initialize App
function initApp() {
    updateNavDots();
    updateView();
    initRecordUploadBar();
}

// Event Listeners
document.addEventListener('DOMContentLoaded', initApp);

// Expose necessary functions to global scope
window.navigateTo = navigateTo;

document.addEventListener('DOMContentLoaded', function() {
    const navDots = document.querySelectorAll('.nav-dot');
    const recordBtn = document.getElementById('record-btn');
    const uploadBtn = document.getElementById('upload-btn');

    navDots.forEach(dot => {
        dot.addEventListener('click', function() {
            console.log(`Navigating to ${this.dataset.view} view`);
            // Implement view navigation here
        });
    });

    recordBtn.addEventListener('click', function() {
        console.log('Record button clicked');
        // Implement record functionality here
    });

    uploadBtn.addEventListener('click', function() {
        console.log('Upload button clicked');
        // Implement upload functionality here
    });
});