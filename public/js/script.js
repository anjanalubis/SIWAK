// ==========================
// Navbar Scroll
// ==========================

window.addEventListener("scroll", function () {

    const navbar = document.getElementById("navbar");

    if(window.scrollY > 50){

        navbar.classList.add("scrolled");

    }else{

        navbar.classList.remove("scrolled");

    }

});


// ==========================
// Leaflet
// ==========================

if(document.getElementById("map")){

    var map = L.map('map').setView([-7.668,109.653],11);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
        attribution:'© OpenStreetMap'
    }).addTo(map);
    // Icon Wisata
const wisataIcon = new L.Icon({
    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
    shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',

    iconSize: [25,41],
    iconAnchor: [12,41],
    popupAnchor: [1,-34],
    shadowSize: [41,41]
});

// Icon UMKM
const umkmIcon = new L.Icon({
    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png',
    shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',

    iconSize: [25,41],
    iconAnchor: [12,41],
    popupAnchor: [1,-34],
    shadowSize: [41,41]
});

   L.marker([-7.769184,109.413867],{
    icon: wisataIcon
})
.addTo(map)
.bindPopup("<b>Pantai Menganti</b>");

    L.marker([-7.676,109.655],{
    icon: umkmIcon
})
.addTo(map)
.bindPopup("<b>UMKM Batik Kebumen</b>");

  
}