<!DOCTYPE html>
<html>
<title>Online CBT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-green.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="dashboard.php" class="w3-bar-item w3-button w3-light-green"><i class="fa fa-home w3-margin-right"></i>Online CBT</a>
  <a href="stresstest.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Stress Test</a>
  <a href="cbtlessons.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">CBT Lessons</a>
  <a href="relaxtips.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Relaxation Tips</a>
  <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">Log out</a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
	<a href="dashboard.php" class="w3-bar-item w3-button w3-light-green">Online CBT</a>
	<a href="stresstest.php" class="w3-bar-item w3-button">Stress Test</a>    
	<a href="cbtlessons.php" class="w3-bar-item w3-button">CBT Lessons</a>
    <a href="relaxtips.php" class="w3-bar-item w3-button">Relaxation Tips</a>
    <a href="login.php" class="w3-bar-item w3-button">Log out</a>
  </div>
</div>

<!-- Page Container -->
<div class="w3-container w3-content align-left" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Middle Column -->
    <div class="w3-col m12">
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="person.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h4>Ms. Alexa Abraham</h4><br>
        <hr class="w3-clear ">
		<span class="w3-right w3-opacity">27 June</span>
        <p>Worksheet 3-1</p>
        <p>Hi! How are you? I have seen your worksheet 3-1 and it seems you are getting there!
		   Great job and don't try to take everything at once alright!</p>
		<hr class="w3-clear">
		<span class="w3-right w3-opacity">10 June</span>
        <p>Worksheet 2-1</p>
        <p>It's great to see you back! I saw your worksheet 2-1. Great job!</p>
      </div> 
      
    <!-- End Middle Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">

  <p>Online CBT 2020</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-light-green w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 
