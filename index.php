<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <title>Inicio</title>
</head>
<body>
    <h1>Fly</h1>
    <div id="map" style="width: 100%; height: 500px;"></div>



<div id="map" style="width: 100%; height: 500px;"></div>
<script>
    const map = L.map('map').setView([-34.6037, -58.3816], 15); // Buenos Aires
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
    L.marker([-34.6037, -58.3816]).addTo(map).bindPopup('Ubicación inicial').openPopup();
</script>


</body>
</html>