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

        <a href="#cbt" class="w3-button w3-block w3-white w3-left-align">Cognitive Behavioural Therapy (CBT)</a>
		<a href="#basic" class="w3-button w3-block w3-white w3-left-align">The Basic</a>
		<a href="#whatwedo" class="w3-button w3-block w3-white w3-left-align">What We Do</a>
        </div>      
      </div>
      
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9" id="cbt">
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <h2><center><b>Lesson 1 </b></center></h2>
		<h2><center><b>Cognitive Behavioral Therapy (CBT)</b></center></h2>
        <p> CBT is a form of therapy where is widely-known to treat depression. Let's get to know CBT!			    
		<h3><i>Definition of CBT?</i></h3>
        <ul><li align="justify">Cognitive: Refers to your thoughts and anything else that goes through your mind
						   including dreams, memories, images and your focus of attention.</li>
			<li align="justify">Behaviour: Includes everything that you do and all the things you choose not to
						   do. (i.e. avoid situations)</li>
			<li align="justify">Therapy: Describes a method of treating a problem it could be self-therapy, group therapy 
						 or with therapists</li>
		</ul>				   
		<hr class="w3-clear" id="basic">
        <h3><i>The Basics</i></h3>
        <center><img src="cbt-process.png" style="width:100%" class="w3-margin-bottom"></center>
        <p align="justify">CBT is a form of psychotherapy that focuses on cognition (thoughts), on behaviour, and your emotions.
						   One way of summing up CBT is that 'you feel the way you think'. But CBT also look closely at behaviour,
						   since the way you act is often determined to how you feel. Furthermore, the way you act can have a positive
						   or negative influence on your feelings. Without realising it, you might have be acting in ways that actually
						   fuelling your bad feelings.</p>
		<p align="justify">The interaction between thoughts, feelings and behaviours is at the core of CBT. Therefore, CBT looks closely
						   at how you think and act in order to help you overcome both behavioural and emotional difficulties.</p>
		<hr class="w3-clear" id="whatwedo">
        <h3><i>What We Do?</i></h3>
        <p align="justify">We include worksheets that would help you go through your days and look back with different views. If you finish all of the
			session, you will be able to freedom yourself from the negative thoughts that you have had on yourself.</p>
		<a href="lesson2.php" class="w3-button w3-light-green">Next Lesson</a>
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
    <a class="w3-button w3-theme" href="#cbt"><span class="w3-xlarge">
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
