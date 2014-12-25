<?php
session_start();
$event_type=$_GET['event_type'];

include "template_upper.html"

?>
<?php
include "template_middle.html"
?>
<html>
<body >
<style>
body{
background-color:#F9EEF9;}
</style>
<div id="viewnews">
<?php
echo "<html>
<body>
<form action='home.php' method='post'>";
if($event_type=="Both"||$event_type=="team"){
	echo "<h2>enter the players names here</h2><br>";
	echo "<textarea rows='5' cols='100'></textarea>";
	}
if($event_type=="individual"){
	echo "<h2>enter the player  name</h2><br>";
	echo "<textarea rows='5' cols='100'></textarea>";
	}
echo "<br>";
echo "<input type='submit' value='submit'>";
echo "</form>";
?>
</div>
</body>
</html>
<?php
include "template_lower.html"
?>
	


