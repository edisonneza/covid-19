const staticTechAlbVer = "techalb-covid-v1";
const assets = [
  "/",
  "/index.html",
  "/css/site.css",
  "/js/site.js"
];

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(staticTechAlbVer).then(cache => {
      cache.addAll(assets);
    })
  );
});

self.addEventListener("fetch", fetchEvent => {
  fetchEvent.respondWith(
    caches.match(fetchEvent.request).then(res => {
      return res || fetch(fetchEvent.request);
    })
  );
});