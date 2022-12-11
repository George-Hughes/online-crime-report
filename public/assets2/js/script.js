const yearEl = document.querySelector(".year");

const now = new Date();

yearEl.textContent = `${now.getFullYear()}`;

// Map

// showMap(5.5502, -0.2174);
const ID = document.getElementById("ID").value;
const LAT = document.getElementById("LAT").value;
const LNG = document.getElementById("LNG").value;
const C_TYPE = document.getElementById("C-TYPE").value;
const REGION = document.getElementById("REGION").value;

const coords = [LAT, LNG];
// var map = L.map("map").setView([LAT, LNG], 15);

// L.tileLayer("https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png", {
//     maxZoom: 19,
//     attribution:
//         '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
// }).addTo(map);

// L.marker([LAT, LNG])
//     .addTo(map)
//     .bindPopup(`${C_TYPE}.<br> ${REGION}.`)
//     .openPopup();

const map = L.map("map").setView(coords, 15);

const tiles = L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
        '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);

const marker = L.marker(coords, { alt: "Kyiv" })
    .addTo(map)
    .bindPopup(`${ID}: ${C_TYPE}.<br> ${REGION}.`);

console.log(coords);
