<!DOCTYPE html>
<html>
<title>Online CBT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-green.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">
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

        <a href="#definition" class="w3-button w3-block w3-white w3-left-align">Definition</a>
		<a href="#direction" class="w3-button w3-block w3-white w3-left-align">Directions</a>
        </div>      
      </div>
      
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9">
      <div class="w3-container w3-card w3-white w3-round w3-margin" id="definition"><br>
		<h3><b>Visualization</b></h3>
        <h4><b>Definitions</b></h4>
		<p align="justify"> You can significantly reduce stress with something enormously powerful: your
			imagination. Everybody visualizes. Daydreams, memories, and self-talk are all types of
			visualization. Visualization is effective in treating many stress-related and physical illnesses,
			including headaches, muscle spasms, chronic pain, and general or situation-specific anxiety.</p>
		<center><video width="320" height="240" controls>
		<source src="visualization.mp4" type="video/mp4">
		</video></center>
        <hr class="w3-clear" id="direction">
        <h4><b>Directions: </b></h4>
		<ol>
        <li> Loosen your clothing, lie down or sit comfortably in a quiet place, and close your eyes.</li>
		<li> Take a few deep breaths and relax. Scan your body and release any tension.</li>
		<li> Imagine a scene or image using all of your senses: sight, hearing, smell, touch, and
			 taste. For example, imagine the sights of a green woodland with different types of
			 trees, wild flowers, a blue sky, white, puffy clouds, and pine needles on the ground.
			 Hear the water of a brook as it runs over the wet and glistening rocks. Hear the sound of
			 a gentle breeze in the leaves and feel the coolness on your cheeks and arms. Listen to
			 the birds and smell the fresh scents of pine needles and the earth. Feel the softness of
			 the pine needles as you sit next to the brook and imagine taking a drink of the cold,
			 clear mountain spring water.</li>
		<li> Use short, positive statements that affirm your ability to relax. For example:</li>
			<p><i>Tension flows from my body.</i>
			<i>I'm totally and completely relaxed.</i></p>
		<li> Practice two to three times per day. Try in the morning before you get out of bed, and
			 at night before going to sleep</li>
		</ol>
		<p align="justify">  Other scenarios may include sitting on a beach, watching the sun set or rise, being in a
			 safe and comfortable room, in a garden, or you own backyard. It doesn't matter as long as the
			 place makes you feel relaxed and has no emotional charge.</p>
		<p align="justify">  You can also this technique to achieve specific goals. For example, a runner
			 preparing for a race would visualize her race on the course daily. She would feel the pressure
			 when running up a hill, the exhaustion after running several miles and she would imagine
			 sprinting to the finish line. When she actually ran in the race, she set a personal record and a
			 record for her age group!</p>
		<p align="justify">  See yourself improving your academic performance by visualizing taking your next test
			 completely calm and confident!</p>
      </div> 
    <!-- End Middle Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>
</body>
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
