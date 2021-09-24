document.addEventListener('DOMContentLoaded', () => {

    if(document.querySelector('#mapa')){

        const lat = -26.8390361;
        const lng = -65.2223955;

        const mapa = L.map('mapa').setView([lat, lng], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapa);

        let marker;

        //AGREGAR EL PIN
        marker = new L.marker([lat,lng]).addTo(mapa);

    }

});
