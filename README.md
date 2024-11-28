<body>
    <h1>Laravel PWA Demo</h1>
    <p>
        Welcome to the <strong>Laravel PWA Demo</strong> repository! This is a Progressive Web Application (PWA) built using the <strong>Laravel Framework</strong>.
        The application demonstrates how to integrate service workers, offline capabilities, and how to install the app on the user's device as a desktop shortcut or home screen app.
    </p>
    <h2>Features</h2>
    <ul>
        <li>Offline Support: Users can access the app even when they are not connected to the internet.</li>
        <li>Service Worker Integration: The app utilizes service workers to cache assets and handle offline functionality.</li>
        <li>Installable App: Users can install the app directly from their browser as a shortcut on their desktop or home screen.</li>
    </ul>
    <h2>Installation</h2>
    <p>To get started with the Laravel PWA Demo, follow these steps:</p>
    <pre>
git clone https://github.com/yourusername/laravel-pwa-demo.git
cd laravel-pwa-demo
composer install
php artisan key:generate
php artisan migrate</pre>
    <h2>Configuration</h2>
    <p>After installation, publish the PWA package configuration:</p>
    <pre>php artisan vendor:publish --provider="LaravelPWA\Providers\LaravelPWAServiceProvider"</pre>
    <p>This will create the necessary configuration files and views for offline support and service worker functionality.</p>
    <h2>Usage</h2>
    <p>Once the app is installed, you can start the development server:</p>
    <pre>php artisan serve</pre>
    <p>Your app will be accessible at <strong>http://localhost:8000</strong>. You can test the offline functionality by disabling your internet connection and accessing the app.</p>
    <h2>Manifest & Service Worker</h2>
    <p>The app is configured with a <strong>manifest.json</strong> file and a <strong>serviceworker.js</strong> file for caching and offline functionality. These files are located in:</p>
    <ul>
        <li>public/manifest.json</li>
        <li>public/serviceworker.js</li>
    </ul>
</body>
</html>
