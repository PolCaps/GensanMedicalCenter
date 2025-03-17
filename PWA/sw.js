self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open('sw-cache').then(function (cache) {
      return cache.addAll([
        '../html/GensanMed/landing-page.php',
        '/manifest.json',
        '/icons/icon-192x192.png',
        '/icons/icon-512x512.png'
      ]);
    })
  );
  self.skipWaiting(); // 🚀 Activate new SW immediately
});

// On network request - Serve from cache if available
self.addEventListener('fetch', function (event) {
  event.respondWith(
    caches.match(event.request).then(function (response) {
      return response || fetch(event.request);
    })
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(clients.claim()); // 🚀 Force clients to use the new SW
});
