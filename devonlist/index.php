<html>
<head>
<title>h</title>
<link href="defaultdupe.css" rel="stylesheet" type="text/css">
</head>
<body onload="divAdjust()">
<div class="header">Website Title</div>
<div class="rowContainer" id="rowContainer">
	<div class="sidebar" id="sidebar">
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	sidebar<br>
	</div>
	<div class="main">
		<h3>Concept: Make your own Geometry Dash Demon List.</h3>
		<p>In the Geometry Dash community, there is a <a href="https://pointercrate.com/">Demon List</a> which
		records the 150 hardest demon-rated levels in Geometry Dash.
		<em>(Note that this list is not affiliated with or endorsed by RobTopGames, the creator and developer of Geometry Dash)</em></p>
		<p>My concept is a website where you can host and manage your own custom Demon List.</p>
		<p>The website will automatically keep track of scoring and you will be able to edit
		any lists you own or have been given permission to edit, and submit records to any list on the website.</p>
	</div>
</div>
<br>
<div class="footer">
	<em>This website is in no way affiliated with or endorsed by RobTopGames AB, nor is it affiliated with or endorsed by pointercrate.com.</em>
</div>
<!-- <script>
function divAdjust() {
	var rowContainerTemp = document.getElementById("rowContainer")
	var sidebarTemp = document.getElementById("sidebar")
	
	if (window.getComputedStyle(rowContainerTemp, null).getPropertyValue("height") < window.getComputedStyle(sidebarTemp, null).getPropertyValue("height")) {
		document.getElementById("rowContainer").style.height = window.getComputedStyle(sidebarTemp, null).getPropertyValue("height")
	}
}
console.log("hi")
</script> -->
<?php
echo "Hello World. Today is ".date("l").". ";
?>
</body>
</html>