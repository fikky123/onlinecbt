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
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">

        <a href="#lesson3" class="w3-button w3-block w3-white w3-left-align">Problematic Behaviour</a>
		<a href="#unhealthybehaviour" class="w3-button w3-block w3-white w3-left-align">Unhealthy Behaviour</a>
		<a href="#challengebehaviour" class="w3-button w3-block w3-white w3-left-align">Challenging Negative Behaviour</a>
        </div>      
      </div>
      
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9">
      <div class="w3-container w3-card w3-white w3-round w3-margin" id="lesson3"><br>
        <h2><center><b>Lesson 3 </b></center></h2>
		<h2><center><b>Problematic Behaviour</b></center></h2>
        <p> In this lesson, we will look into problematic behaviour. </i></h3>
		<p align="justify"> According to studies, many suffer anxiety and yet they don't even realise them. It's okay to feel
			them. We hope with spending time with our treatment, will help you live a better journey later. So cheer up!</p>			   
		<hr class="w3-clear" id="unhealthybehaviour">
        <h3><i>Unhealthy behaviour</i></h3>
        <p align="justify">Having bad feelings or anxiety doesn't make you less as a person. Everyone have their own reaction
						   when they encounter those. But that doesn't mean it's a good thing. It may seem great at first since
						   you expressing yourself with that attitude but it'd be a bad thing for a long term. Thus, it'd be 
						   great if you could write your unhealthy behaviour on the worksheet below.</p>	
        <p align="justify">There are three types of behaviour; avoidance, mood lowering and self-destructive. For example,
						   you could be procastinate when doing work (avoidance), or isolate yourself from family or friends (mood lowering), or
						   doing something that reckless and make it being risky (self-destructive).</p>
		<a href="worksheet3-1.php" class="w3-button w3-light-green">Worksheet: Unhealthy behaviour</a>
		<hr class="w3-clear" id="challengebehaviour">
		<h3><i>Challenging your negative behaviour</i></h3>
		<p align="justify">Rank top five of your problems and see how they were related to you. This will makes you apply the concept
						   into your negative attitude. Then, you will describe them on how to challenge them!</p>
			<a href="worksheet3-2.php" class="w3-button w3-light-green">Worksheet: Challenging negative behaviour</a>
			<br><br>
		<a href="lesson4.php" class="w3-button w3-light-green">Next Lesson</a>
		<br><br>
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
