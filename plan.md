## Project Overview
Create SoundMind, a personal journaling app that allows users to record audio from their mobile browser or upload audio from their phone. The app will provide a seamless, native-like experience with sliding views, mood analysis, and GPT-generated summaries of journal entries, using PHP, JavaScript, HTML, and Tailwind CSS.

## Initial Setup
1. Create main project folder: `soundmind_app`
2. Initialize GitHub repository
   ```
   git init
   git remote add origin [repository URL]
   ```
3. Create .gitignore file
4. Set up folder structure:
   ```
   soundmind_app/
   ├── public/
   │   ├── index.php
   │   ├── js/
   │   ├── css/
   │   └── assets/
   ├── src/
   │   ├── controllers/
   │   ├── models/
   │   └── views/
   ├── config/
   ├── tests/
   ├── .htaccess
   ├── .gitignore
   ├── README.md
   └── project-plan.md
   ```
5. Set up GitHub project board programmatically
6. Create initial GitHub issues based on tasks listed below

## Development Protocol
1. Create feature-specific branches for each new task or feature
2. Implement "every other day" system for code refactoring and optimization
3. Regularly update and refer to the GitHub project board when coding
4. Work on one task at a time to maintain focus and code quality
5. Commit changes frequently with descriptive commit messages
6. Regularly remove unnecessary code, comments, and debug statements
7. Reinvest time in simplifying and improving code efficiency

## GitHub Integration
- Before starting development, create a GitHub project and associated issues programmatically
- As new tasks or issues arise during development, create them in GitHub
- Ensure only one issue is being worked on at a time
- Update issue status as work progresses (e.g., "In Progress", "Ready for Review", "Done")

## Tasks
1. [x] Set up project structure and GitHub repository
2. [x] Create initial GitHub project board and issues
3. [x] Set up PHP environment and implement basic routing
4. [x] Implement Tailwind CSS for styling
5. [x] Create base HTML structure for the app
6. [x] Develop JavaScript for client-side interactivity and AJAX requests
7. [x] Implement persistent recording/upload tab bar component
8. [ ] Develop Home view (SoundMind view) with color-coded journal entry list
9. [ ] Create Detail view for individual journal entries
10. [ ] Implement Insights view with entry list (chart to be added later)
11. [ ] Develop Settings view with OpenAI API key input, obtainment link, and data deletion option
12. [ ] Implement sliding transitions between views with dot navigation using JavaScript
13. [ ] Set up PHP backend API
14. [ ] Implement user authentication system
15. [ ] Set up database (MySQL)
16. [ ] Implement audio recording and upload functionality using JavaScript
17. [ ] Integrate OpenAI GPT-4 for generating summaries and mood ratings
18. [ ] Implement data model and database schema
19. [ ] Create API endpoints for CRUD operations on journal entries
20. [ ] Implement error handling and input validation
21. [ ] Optimize app performance and responsiveness
22. [ ] Implement user data privacy and security measures
23. [ ] Write unit and integration tests
24. [ ] Perform cross-browser and cross-device testing
25. [ ] Create README.md file with project information and setup instructions
26. [ ] Prepare for deployment
27. [ ] Implement help page for obtaining and using OpenAI API key
28. [ ] Design and implement additional visualizations for Insights view (if decided)

## Data Model

User:
- id (int, auto-increment)
- username (varchar)
- email (varchar)
- password (varchar, hashed)
- openAIApiKey (varchar, encrypted)
- createdAt (timestamp)
- updatedAt (timestamp)

JournalEntry:
- id (int, auto-increment)
- userId (int, foreign key to User)
- audioUrl (varchar)
- titleSummary (varchar)
- briefSummary (text)
- detailedSummary (text)
- moodRating (int, -3 to +3)
- date (date)
- duration (int, in seconds)
- transcription (text)
- createdAt (timestamp)
- updatedAt (timestamp)

Relationships:
- One User can have many JournalEntries (One-to-Many)

## Additional Project-Specific Details
1. Frontend: HTML, JavaScript, and Tailwind CSS
2. Backend: PHP
3. Database: MySQL
4. Authentication: PHP sessions and cookies
5. API Integration: OpenAI GPT-4 for generating summaries and mood ratings
6. Audio Processing: Web Audio API for recording, and a suitable JavaScript library for handling audio uploads
7. State Management: Local storage and AJAX for data persistence and retrieval
8. Charting Library: Consider using Chart.js for future mood trend visualization
9. Testing: PHPUnit for PHP tests, Jest for JavaScript tests
10. Deployment: Traditional web hosting with PHP support or a cloud platform like DigitalOcean
11. App Name: The application will be called "SoundMind"
12. Navigation: Implement a dot navigation system at the bottom of each main view for easy switching between screens
13. Color-coding: Entries in the Home and Insights views should be color-coded (green or red) based on the mood rating
14. Persistent Record/Upload Bar: This component should remain fixed at the bottom of all views
15. OpenAI API Key: Provide a link in the Settings view to guide users on obtaining an API key
16. Insights View: Consider additional visualizations beyond the entry list, such as mood trends over time

## Best Practices Reminder
- Maintain focus and code quality by working on one task at a time
- Regularly remove unnecessary code, comments, and debug statements
- For larger projects, consider creating subfolders within the "src" folder
- Continuously reinvest time in simplifying and improving code efficiency
- Use Tailwind CSS framework
- Implement proper error handling and logging
- Ensure all user data is properly encrypted and securely stored
- Implement rate limiting for API calls to OpenAI to manage costs
- Use environment variables for sensitive information (e.g., API keys, database credentials)
- Implement proper input sanitization to prevent XSS and SQL injection attacks
- Use HTTPS for all communications between client and server
- Implement proper user session management and secure authentication practices

Remember to update this plan as the project evolves and new requirements or tasks are identified.

## Future Features
- Implement functionality to identify specific activities within each entry using GPT and assign individual mood ratings to these activities.
- Consider adding voice-to-text transcription to reduce reliance on OpenAI API for initial transcription.
- Implement data export functionality for users to backup their journal entries.
- Add support for attaching images or other media types to journal entries.
- Implement natural language processing for more advanced insights and trend analysis.

## Technical Considerations
1. Single Page App-like Experience:
   - Use JavaScript to handle view transitions and updates without full page reloads.
   - Implement custom routing in JavaScript to manage different views.
   - The persistent recording tab bar will be implemented as a fixed HTML/CSS component that remains across all views.

2. Mobile Optimization:
   - Use responsive design principles and Tailwind CSS to ensure the app looks and functions well on various mobile devices.
   - Implement touch events with JavaScript for sliding between views and deleting entries.
   - Optimize performance for mobile devices, considering factors like battery usage and data consumption.

3. Audio Handling:
   - Use the Web Audio API for recording audio in the browser.
   - Implement a robust file upload system using JavaScript and PHP for handling audio files from the user's device.
   - Consider implementing audio compression to reduce storage and bandwidth requirements.

4. OpenAI API Integration:
   - Implement server-side API calls to OpenAI using PHP to protect the user's API key.
   - Use a queueing system for processing audio files and generating summaries to handle potential high load and rate limiting.

5. Data Privacy and Security:
   - Implement encryption for storing sensitive user data, including journal entries and audio files.
   - Use secure, HttpOnly cookies for storing session information.
   - Implement proper data deletion procedures for when users request to delete their data.

6. Offline Functionality:
   - Consider implementing offline support using Service Workers, allowing users to record entries without an internet connection and sync later.

7. Performance Optimization:
   - Implement lazy loading for journal entries to improve initial load time and performance.
   - Use pagination or infinite scrolling for the journal entry list to handle potentially large numbers of entries.

By following this project plan and considering these technical aspects, we'll be able to create a robust, user-friendly SoundMind journaling app with the desired functionality and a native-like feel using PHP, JavaScript, HTML, and Tailwind CSS.