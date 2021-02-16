<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <p class="w3-text-light-green">Online CBT</p>
  </div>
  <div class="w3-bar-block">
    <a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-light-green"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
	<a href="loginpsy.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-light-green"><i class="fa fa-th-large fa-fw w3-margin-right"></i>LOG OUT</a> 
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Home</b></h1>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
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

		  <div class="w3-row-padding">
         <table class="w3-table">
		<form class="w3-form">
			<tr><td colspan="2">Add comment</td>
			</tr>
				<td colspan="2"><textarea rows="5" cols="90" disabled>It's great to see you back! I saw your worksheet 2-1. Great job!</textarea></td>
			</tr>
			</tr>
				<td colspan="2"><a href="home.php" class="w3-button w3-light-green">Comment</a></td>
			</tr>
			</form>
		</table>
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
