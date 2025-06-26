/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
self.addEventListener('install', event => {
    //console.log('sw.js 1', event);
    event.waitUntil(Promise.all([self.skipWaiting()]));
});

self.addEventListener('fetch', (e) => {
    return;
    //console.log('sw.js 2', e.request.url);
    //e.respondWith(fetch(e.request));
});