document.addEventListener('DOMContentLoaded', init, false);

var base_url = window.location.origin;
console.log(base_url);

function init() {
    if ('serviceWorker' in navigator && navigator.onLine) {
        navigator.serviceWorker.register(base_url + '/service-worker.js')
        .then((reg) => {
            console.log('Registrasi service worker Sukses, bro!', reg);
        })
        .catch((err) => {
            console.error('Registrasi service worker Gagal', err);
        })
    }
}