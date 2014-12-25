<?php
session_start();
$news_id=$_GET['news_id'];
$event_date=$_GET['event_date'];
$current_date=date("Y-m-d");
include "template_upper.html"

?>
<?php
include "template_middle.html";
echo'
<html>
<body >
<style>
body{
background-color:#F9EEF9;}
</style>
<div id="shownews"> ';

require_once "dbconnect.php";
$id=mysqli_query($con,"select * from news where news_id='$news_id' ") or die("error here:".mysql_error());
	while($row=mysqli_fetch_array($id))
		{
		 if($row['news_id']==$news_id){
				echo "<h2>".$row['blurb']."</h2>";
				echo "<br>";
				echo "<h3>".$row['news']."</h3>";
			}	
		if($row['event_date']>$current_date && $row['upcoming_sport_flag']=="game")
				echo "<a href='registration.php?news_id=".$news_id."&&event_type=".$row['event_type']."' ><h4>register</h4></a>";
		
		}
	
 echo '</div></body>
 </html>';
?>
<?php
include "template_lower.html"
?>