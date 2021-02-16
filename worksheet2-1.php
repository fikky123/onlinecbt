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
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
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
    <!-- Column -->
    <div class="w3-col m12">
      <div class="w3-container w3-card w3-white w3-round w3-margin" id="lesson2"><br>
        <h2><center><b>Worksheet - Probability Page</b></center></h2>
        <table class="w3-table">
		<form class="w3-form">
			<tr><td>What is the bad event I'm imagining or predicting will happen?</td>
				<td>Being totally incapacitated by panic in the town centre. I'm unable to move and
					people look at me like I'm a freak. Hours later, the police pick me up.</td>
			</tr>
			<tr><td>In scale from 0 to 10, how likely is it that this bad event will happen?</td>
				<td>(No probability at all)
					<input type="radio"> 1</input>
					<input type="radio"> 2</input>
					<input type="radio" checked> 3</input>
					<input type="radio"> 4</input>
					<input type="radio"> 5</input>
					<input type="radio"> 6</input>
					<input type="radio"> 7</input>
					<input type="radio"> 8</input>
					<input type="radio"> 9</input>
					<input type="radio"> 10</input>
					(Almost certain to happen)</td>
			</tr>
			</form>
		</table>
		<hr class="w3-clear" id="symptoms">
                <table class="w3-table">
		<form class="w3-form">
			<tr><td>What is the bad event I'm imagining or predicting will happen?</td>
				<td><textarea rows="5" cols="90" disabled>Being totally incapacitated by panic in the town centre. I'm unable to move and people look at me like I'm a freak. Hours later, the police pick me up.</textarea></td>
			</tr>
			<tr><td>In scale from 0 to 10, how likely is it that this bad event will happen?</td>
				<td>(No probability at all)
					<input type="radio"> 1</input>
					<input type="radio"> 2</input>
					<input type="radio" checked> 3</input>
					<input type="radio"> 4</input>
					<input type="radio"> 5</input>
					<input type="radio"> 6</input>
					<input type="radio"> 7</input>
					<input type="radio"> 8</input>
					<input type="radio"> 9</input>
					<input type="radio"> 10</input>
					(Almost certain to happen)</td>
			</tr>
			</form>
		</table>
		<br><br>
			<center><a href="cbtlessons.php" class="w3-button w3-light-green">CBT Lesson</a>
					<a href="#" class="w3-button w3-light-green">Submit</a>
					<a href="lesson3.php" class="w3-button w3-light-green">Lesson 3</a></center>
		<br><br>
      </div> 
    <!-- End Column -->
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
