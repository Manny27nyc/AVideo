// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
self.addEventListener('install', event => {
    //console.log('sw.js 1', event);
    event.waitUntil(Promise.all([self.skipWaiting()]));
});

self.addEventListener('fetch', (e) => {
    return;
    //console.log('sw.js 2', e.request.url);
    //e.respondWith(fetch(e.request));
});