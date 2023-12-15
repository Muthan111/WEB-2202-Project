<!DOCTYPE html>
 <html lang="en">
 <head>
 <title> Location
 </title>
 <meta charset="utf-8"> 
 <link rel = "stylesheet" type ="text/css" href = "navbar.css">
 <link rel = "stylesheet" type ="text/css" href = "location1.css">

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
      <!-- <li><a href="#">Rewards</a></li>
      <li><a href="#">Points</a></li> -->
      <li class="profile">
        <a href="Profile.php"><img src="./images/profile.png" alt="Profile"></a>
        <ul class="dropdown" style ="left: -50%";>
          <li><a href="user_login_page.php">User login</a></li>
          <li><a href="user_register_page.php">User Registration</a></li>
          <li><a href="admin_login_page.php">Admin login</a></li>
          <li><a href="admin_login_backend.php">Admin Registration</a></li>
          <li><a href="admin_profile_page.php">Admin Profile page</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div class="content">
            <h1>Locations</h1>
            <div class="discussion-container">
                <div class="discussion-item">
                    <img src="./images/EcoHub_recycling center.jpeg">
                    <div class="discussion-info">
                        <h2>EcoHub Recycle Center</h2>
                        <p>Location: Jalan Ampang, Kuala Lumpur</p>
                        <p>EcoHub is a state-of-the-art recycling 
                          facility strategically located in the 
                          heart of Kuala Lumpur. 
                          With its innovative 3D recycling technology, 
                          it transforms plastic, glass, and paper 
                          waste into reusable materials.</p>
                    </div>
                </div>
                <div class="discussion-item">
                    <img src="./images/GreenCycle.jpeg">
                    <div>
                        <h2>GreenCycle Innovations</h2>
                        <p>Location: Penang Industrial Park, Penang</p>
                        <p>Nestled within Penang's bustling industrial park, GreenCycle 
                          Innovations stands out as a beacon of eco-friendly practices. 
                          This cutting-edge recycling center employs 
                          advanced 3D recycling machinery, 
                          focusing on upcycling electronic waste (e-waste) into new electronic components.</p>
                    </div>
                </div>
                <div class="discussion-item">
                    <img style = "width: 230px" src="./images/Tropicana.jpg">
                    <div>
                        <h2>Tropicana EcoVillage Recycling Hub</h2>
                        <p>Location: Johor Bahru, Johor</p>
                        <p>Tropicana EcoVillage Recycling Hub is an 
                          architectural marvel situated in Johor Bahru. 
                          This facility emphasizes community involvement in recycling 
                          initiatives. Equipped with innovative 3D printers, 
                          it converts collected plastic waste into functional items such as furniture 
                          and household items.</p>
                    </div>
                </div>
            </div>
        </div>
 </body>
</html>