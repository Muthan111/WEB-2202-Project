<!DOCTYPE html>
<html lang="en">
<head>
<title>Map</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="leaflet/leaflet.css" />
    <link rel="stylesheet" href="./leaflet-search/src/leaflet-search.css" />
    <script src="./leaflet/leaflet.js"></script>
    <script src="./leaflet-search/src/leaflet-search.js"></script>

    <!-- Add styles to set the map container size -->
    <style>
      
        #map {
            height: 500px; /* Set the desired height */
            width: 100%; /* Set the desired width */
        }
    </style>
</head>
<body>
    <nav>
        <a class="logo" href="#"><img class="img1" src="./images/Screenshot 2023-12-11 153144.png" alt="Logo"></a>
        <ul>
            <li>
                <a href="Homepage.php">Home</a>
                
            </li>
            <li>
                <a href="Location.php">Location</a>
                <ul class="dropdown">
                    <li><a href="Map.php">Map</a></li>
                </ul>
            </li>
            <li>
                <a href="Redeem.php">Redeem</a>
                <ul class="dropdown">
                    <li><a href="filament_selection.php">Filaments</a></li>
                    <li><a href="filament_redeemer.php">PETG</a></li>
                    <li><a href="filament_redeemer_PE.php">PE</a></li>
                    <li><a href="filament_redeemer_PET.php">PET</a></li>
                </ul>
            </li>
            <li class="profile">
                <a href="Profile.php"><img src="./images/profile.png" alt="Profile"></a>
                <ul class="dropdown" style="left: -50%;">
                    <li><a href="user_login_page.php">User login</a></li>
                    <li><a href="user_register_page.php">User Registration</a></li>
                    <li><a href="admin_login_page.php">Admin login</a></li>
                    <li><a href="user_register_page.php">Admin Registration</a></li>
                    <li><a href="admin_profile_page.php">Admin Profile page</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="search-container">
      <div id="search-bar"></div>
    </div>

    <!-- Add a container for the map -->
    <div id="map"></div>


    <script>
        var mymap = L.map('map').setView([3.06729, 101.60375], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(mymap);

        var searchLayer = L.layerGroup(); // Create a layer for the search control

        var searchControl = new L.Control.Search({
            position: 'topright',
            layer: searchLayer, // Use the layer for searching
            propertyName: 'name', // Specify the property in your marker data to search
            marker: false // Set to true if you want to show a marker for the found location
        });

        searchControl.addTo(mymap);

        // Add a marker to the search layer
        L.marker([3.06729, 101.60375]).addTo(searchLayer).bindPopup('Your Location');

        // Optional: Add a marker directly to the map
        L.marker([3.06729, 101.60375]).addTo(mymap).bindPopup('Your Location');
    </script>
</body>
</html>
