<!DOCTYPE html>
<html>
<title>Online CBT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-green.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

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

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="stresstest">
<header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Stress Test</b></h5>
  </header>

   <div class="w3-container">
	<h5>Over the last two weeks, how often have you been bothered by any of the following problems?</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
	<form post="" method="">
	  <tr>
        <td><b>Questions</b></td>
        <td><b>0</b></td>
		<td><b>1</b></td>
		<td><b>2</b></td>
		<td><b>3</b></td>
      </tr>
      <tr>
        <td>1. Little interest or pleasure in doing things?</td>
        <td><input type="radio" value="0"></td>
		<td><input type="radio" value="1"></td>
		<td><input type="radio" value="2" checked></td>
		<td><input type="radio" value="3"></td>
      </tr>
      <tr>
        <td>2. Feeling down, depressed, or hopeless?</td>
        <td><input type="radio" value="0"></td>
		<td><input type="radio" value="1"></td>
		<td><input type="radio" value="2" checked></td>
		<td><input type="radio" value="3"></td>
      </tr>
      <tr>
        <td>3. Trouble falling or staying asleep, or sleeping too much?</td>
        <td><input type="radio" value="0"></td>
		<td><input type="radio" value="1"></td>
		<td><input type="radio" value="2" checked></td>
		<td><input type="radio" value="3"></td>
      </tr>
      <tr>
        <td>4. Feeling tired or having little energy?</td>
        <td><input type="radio" value="0"></td>
		<td><input type="radio" value="1"></td>
		<td><input type="radio" value="2" checked></td>
		<td><input type="radio" value="3"></td>
      </tr>
      <tr>
        <td>5. Poor appetite or overeating</td>
        <td><input type="radio" value="0"></td>
		<td><input type="radio" value="1"></td>
		<td><input type="radio" value="2" checked></td>
		<td><input type="radio" value="3"></td>
      </tr>
      <tr>
        <td>6. Feeling bad about yourself - or that you are a failure or have let yourself or your family down?</td>
        <td><input type="radio" value="0"></td>
		<td><input type="radio" value="1"></td>
		<td><input type="radio" value="2" checked></td>
		<td><input type="radio" value="3"></td>
      </tr>
	  <tr>
        <td>7. Trouble concentrating on things, such as reading the newspaper or watching television?</td>
        <td><input type="radio" value="0"></td>
		<td><input type="radio" value="1"></td>
		<td><input type="radio" value="2" checked></td>
		<td><input type="radio" value="3"></td>
      </tr>
	  <tr>
        <td>8. Moving or speaking so slowly that other people could have noticed? Or the opposite - being so fidgety or restless that you have been moving around a lot more than usual?</td>
        <td><input type="radio" value="0"></td>
		<td><input type="radio" value="1"></td>
		<td><input type="radio" value="2" checked></td>
		<td><input type="radio" value="3"></td>
      </tr>
	  <tr>
        <td>9. Thoughts that you would be better off dead, or of hurting yourself in some way?</td>
        <td><input type="radio" value="0"></td>
		<td><input type="radio" value="1"></td>
		<td><input type="radio" value="2" checked></td>
		<td><input type="radio" value="3"></td>
      </tr>
	  </form>
    </table><br>
	<a href="resultstressscale.php" class="w3-button w3-light-green">Submit</a>
  </div>
  <br>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">

  <p>Online CBT 2020</p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-light-green w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
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
