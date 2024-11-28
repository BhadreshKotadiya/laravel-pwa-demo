var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/',
    '/contact',
    '/images/icons/icon-72x72.png',
    'css/app.css',
    '/offline',
    '/about',
];


// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
        .then(cache => {
            console.log('Opened cache'); // Log when the cache is opened.
            return cache.addAll(filesToCache); // Add files to the cache.
        })
        .catch(error => {
            console.error('Cache open failed:', error); // Log any errors.
        })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                .filter(cacheName => (cacheName.startsWith("pwa-")))
                .filter(cacheName => (cacheName !== staticCacheName))
                .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
        .then(response => {
            return response || fetch(event.request);
        })
        .catch(() => {
            return caches.match('offline');
        })
    )
});
