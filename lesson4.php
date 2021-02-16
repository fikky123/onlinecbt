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

        <a href="#lesson4" class="w3-button w3-block w3-white w3-left-align">Problematic Emotions</a>
		<a href="#drawingemotions" class="w3-button w3-block w3-white w3-left-align">Drawing Emotions</a>
		<a href="#diveintoemotions" class="w3-button w3-block w3-white w3-left-align">Dive into Emotions</a>
        </div>      
      </div>
      
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9" id="lesson4">
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <h2><center><b>Lesson 4 </b></center></h2>
		<h2><center><b>Problematic Emotions</b></center></h2>
        <p align="justify">We all jump into conclusions, make a crisis out of nothing, or take events personally
						   from time to time. Thinking in unhelpful ways is a pretty normal human thing to do.
						   In fact, thinking errors are so common that clinicians and researchers have been able to sort
						   them into clear categories. But common doesn't mean harmless.</p>
		<p align="justify">Emotion is a feelings that we felt at a particular time. For example, we feel happy, proud, sad in one time.
						   However, emotions could affect us in any way. We could feel sad and be gloomy all day or we could be happy and
						   smiling the whole day. Emotions do play important parts in our life as it shows how effectively our life could
						   be with emotions. Therefore, we are looking into how to control those emotions to brighten your day whenever you
						   are feeling down.</p>				   
		<hr class="w3-clear" id="drawingemotions">
		<h3><i>Drawing Emotions</i></h3>
		<p align="justify">In this section, we will express the way we feel in the worksheet. It will help you to understand why do you
						   feel that? How do you feel? What did you do when you feel that? and see how you conclude your emotions based on
						   how you felt.</p>
		<a href="worksheet4-1.php" class="w3-button w3-light-green">Worksheet: Drawing emotions</a>
        <hr class="w3-clear" id="diveintoemotions">
		<h3><i>Dive into emotions</i></h3>
        <p align="justify">Emotions have four components; thoughts, memories & attentions, physical effect and behaviour.
						   Sure, this explained how feelings affects our thoughts, then make it into memories, later having
						   physical effect and finally, how we behave. For examples, when we feel sad by things that happened, we tend to
						   overthink and make it a bad memory in mind. Then effecting ourselves by having less sleep and made
						   tantrum to your significant other or families. </p>
		<a href="worksheet4-2.php" class="w3-button w3-light-green">Worksheet: Identify emotion's component</a>
		<p align="justify">However, that isn't what we are focusing. Instead of self-blaming, we want to focus on how you identify those feelings
						   and challenge them.</p>
		<a href="worksheet4-3.php" class="w3-button w3-light-green">Worksheet: Challenge negative emotions</a>
		<br><br>
		<a href="lesson5.php" class="w3-button w3-light-green">Next Lesson</a>
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
