<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Wash Dashboard</title>
    <!-- Leaflet.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #map {
            height: 400px;
            width: 100%;
            border-radius: 10px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }
        .recommendations {
            margin-top: 30px;
        }
        .recommendation-item {
            background-color: #fff;
            padding: 20px;
            margin: 10px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .recommendation-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .recommendation-item h3 {
            margin: 0;
            font-size: 1.5em;
            color: #333;
        }
        .recommendation-item p {
            margin: 5px 0;
            color: #666;
        }
        .recommendation-item .rating {
            font-weight: bold;
            color: #ff9800;
        }
    </style>
</head>
<body>
    @include('component.navbar')

    <div class="container">
        <h1>Car Wash Dashboard</h1>

        <!-- Map container -->
        <div id="map"></div>

        <!-- Recommended places -->
        <div class="recommendations">
            <h2>Recommended Car Washes</h2>
            <div class="recommendation-item" onclick="zoomToCarWash(0)">
                <h3>Car Wash 1</h3>
                <p>Address: Jalan XYZ, Malang</p>
                <p class="rating">Rating: 4.5/5</p>
            </div>
            <div class="recommendation-item" onclick="zoomToCarWash(1)">
                <h3>Car Wash 2</h3>
                <p>Address: Jalan ABC, Malang</p>
                <p class="rating">Rating: 4.0/5</p>
            </div>
            <div class="recommendation-item" onclick="zoomToCarWash(2)">
                <h3>Car Wash 3</h3>
                <p>Address: Jalan DEF, Malang</p>
                <p class="rating">Rating: 4.7/5</p>
            </div>
        </div>
    </div>

    @include('component.footer')

    <!-- Leaflet.js JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initializing the map
        var map = L.map('map').setView([-7.9666, 112.6326], 13); // Centering on Malang

        // Adding tile layer (OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Sample car wash locations
        var carWashLocations = [
            {
                name: "Car Wash 1",
                lat: -7.9666,
                lon: 112.6326,
                address: "Jalan XYZ, Malang",
                rating: 4.5
            },
            {
                name: "Car Wash 2",
                lat: -7.9800,
                lon: 112.6350,
                address: "Jalan ABC, Malang",
                rating: 4.0
            },
            {
                name: "Car Wash 3",
                lat: -7.9700,
                lon: 112.6400,
                address: "Jalan DEF, Malang",
                rating: 4.7
            }
        ];

        // Array to hold Leaflet markers for each location
        var markers = [];

        // Adding markers for each car wash location
        carWashLocations.forEach(function(location, index) {
            var marker = L.marker([location.lat, location.lon]).addTo(map);
            marker.bindPopup("<b>" + location.name + "</b><br>" + location.address + "<br>Rating: " + location.rating);
            markers.push(marker);
        });

        // Function to zoom to a specific car wash when clicking on a recommendation
        function zoomToCarWash(index) {
            var location = carWashLocations[index];
            map.setView([location.lat, location.lon], 15);
            markers[index].openPopup(); // Open the popup of the clicked car wash
        }
    </script>
</body>
</html>
