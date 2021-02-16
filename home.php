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
	<table class="w3-table w3-border w3-bordered w3-striped w3-white">
	<tr><td>Client's Name</td>
		<td>Mood Scale Result</td>
		<td>Lesson</td>
		<td>Worksheets</td>
	</tr>
		<tr><td>Sarah Ali</td>
		<td>44</td>
		<td>Lesson 2 </td>
		<td><a href="insert-comment1.php">Worksheet 2-1</a></td>
	</tr>
		</tr>
		<tr><td>Abu Samad</td>
		<td>40</td>
		<td>Lesson 3 </td>
		<td><a href="insert-comment2.php">Worksheet 3-1</a></td>
	</tr>
	</table>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-light-green">«</a>
      <a href="#" class="w3-bar-item w3-light-green w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-light-green">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-light-green">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-light-green">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-light-green">»</a>
    </div>
  </div>

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
