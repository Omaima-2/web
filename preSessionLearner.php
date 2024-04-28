<?php
$servername= "localhost";
$username= "root" ;
$password= "";
$dbname= "fluency" ;
$connection= mysqli_connect($servername,$username,$password,$dbname);
$database= mysqli_select_db($connection, $dbname);
// Check the connection
if (!$connection) 
die("Connection failed: ".mysqli_connect_error());

/ Fetch data from the database
$sql = "SELECT * FROM requestsession"; // Replace your_table with your actual table name
$result = mysqli_query($connection , $sql);


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Previous sessions</title><meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <link rel="icon" href="Logo.png" type="image/x.icon">
    <link rel="stylesheet" href="sessions.css" >
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
    crossorigin="anonymous"/>
    </head>
    <body>
    <!--Back button--> 
  <div class="backBtn">
    <a href="homePageLearner.html">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
      <span class="label">Back </span>
      <span class="line bLine"></span>
  </a>
</div>
      <h1>My Previous sessions</h1>

       <!-- Navbar Section -->
     <nav class="navbar">
      <div class="navbar__container">
        <img src="LogoBlackBackground.PNG" alt="Flunecy">
         
        </div>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="homePageLearner.html" class="navbar__links" id="home-page">Home</a>
          </li>

          
      <li class="navbar__item">
        <a href="homePageLearner.html" class="navbar__links" id="services-page">Services</a>
      </li>

      <li class="navbar__item navbar__dropdown">
        <a href="#" class="navbar__links">Sessions</a>
        <div class="navbar__dropdown-content">
          <ul>
            <li><a href="currentSessionLearner.html">Current Sessions</a></li>
            <li><a href="#">Previous Sessions</a></li>
          </ul>
        </div>
      </li>
  

      <li class="navbar__item">
        <a href="RequestLearner.html" class="navbar__links" id="partner-list-page">My Requests</a>
      </li>
      <li class="navbar__item navbar__dropdown">
        <a href="#" class="navbar__links">Profile</a>
        <div class="navbar__dropdown-content">
          <ul>
            <li><a href="ProfileLearner.html">View profile</a></li>
            <li><a href="editLearner.html">edit profile</a></li>
           <li> <a href="#overlay" class="open-button">delete account</a></li>
      <div class="overlay" id="overlay">
        <div class="message">
          <h2>Are you sure?</h2>
          <p>You want to delete account</p>
         
          <div>
            <form action="fluency.html" style="display: inline;">
              <button type="submit" style="background-color: red;">Yes</button>
            </form>
            <form action="homePageLearner.html" style="display: inline;">
              <button type="submit" style="background-color: green;">No</button>
            </form>
          </div>
        </div>
      </div>
      <li><a href="fluency.html">Sign out</a></li>
          </ul>
        </div>
      </li>
      <img src="ProfileIcon.png" alt="Profile" class="custom-img">
    </ul>
  </nav>

  <main class="page-content">
            <?php
            // Check if there is any data in the result set
            if (mysqli_num_rows($result) > 0) {
              // Output data of each row
              while ($row = mysqli_fetch_assoc($result)) {
                  each '<div class="card" '>;
                  each '<div class="content"'>;
                  echo '<h2 class="title">Date: ' . $row["Schedule"] . '</h2';
                  echo '<p class="copy">Session Duration: ' . $row["Duration"] . '</p>';
                  echo '<p class="copy">Language to Learn: ' . $row["Language"] . '</p>';
                  echo '<p class="copy">Language Partner: ' . $row["partner_id_req"] . '</p>';
                  echo '</div></div>' ;
              }
          } else {
              echo "0 results";
          }
            ?>
</main>

  <!--
        <main class="page-content">
            <div class="card">
              <div class="content">
                <h2 class="title">Sun, 4 Feb. 2024</h2>
                <p class="copy">Session duratin: 30 min.<br>Time: 12:00 pm.</p>
                <p class="copy">Language to learn: English.</p>
                <p class="copy">Language partner: <br>Emma Noah.<br><br> Rate partner: <a href="LearnerRaitingAndReview.html"><img src="rate.png" width="100px"></a></p>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <h2 class="title">Mon, 15 Jan. 2024</h2>
                <p class="copy">Session duratin: 1 hr.<br>Time: 4:00 pm.</p>
                <p class="copy">Language to learn: Spanish.</p>
                <p class="copy">Language partner: <br>Jordi Alba.<br><br> Rate partner: <a href="LearnerRaitingAndReview.html"><img src="rate.png" width="100px"></a></p>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <h2 class="title">Wed, 3 Jan. 2024</h2>
                <p class="copy">Session duratin: 15 min.<br>Time: 8:30 pm.</p>
                <p class="copy">Language to learn: English.</p>
                <p class="copy">Language partner: <br>Emma Noah.<br><br> Rate partner: <a href="LearnerRaitingAndReview.html"><img src="rate.png" width="100px"></a> </p>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <h2 class="title">Wed, 27 Dec. 2023</h2>
                <p class="copy">Session duratin: 30 min.<br>Time: 11:45 am.</p>
                <p class="copy">Language to learn: Indian.</p>
                <p class="copy">Language partner: <br>Kumar Moh.<br><br> Rate partner: <a href="LearnerRaitingAndReview.html"><img src="rate.png" width="100px"></a></p>
              </div>
            </div>
          </main>
-->
    </body>
</html>