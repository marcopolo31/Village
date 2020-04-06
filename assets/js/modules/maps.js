import L from 'leaflet'


export default class Map{

    static init(){
        let map = document.querySelector('#map')
        if(map === null){
            return
        }

        
        map = L.map('map').setView([49.275379, 6.205451], 13)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
            maxZoom: 18,
            minZoom: 12,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);
            L.marker([49.275379, 6.205451]).addTo(map)
            .bindPopup("C'est ici")
            .openPopup();
        
    }
}