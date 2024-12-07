    function initMap() {
        const location = { lat: -34.6037, lng: -58.3816 }; // Ejemplo: Buenos Aires
        const map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location,
        });
        const marker = new google.maps.Marker({
            position: location,
            map: map,
        });
    }
