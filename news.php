<?php
session_start();
$page=$_GET['page'];
$current_date=date("Y-m-d");
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

//echo "hi";

//$submit=$_POST['submit'];
//if(isset($submit))
//{
 require_once "dbconnect.php";
 $row=mysqli_query($con,"select * from news ");
 $rownum=mysqli_num_rows($row);
 $page_begin=$page*10+1;
 $page_end=$page_begin+10;
 echo "<h2>News and Announcements</h2><hr>";
 
 while($news=mysqli_fetch_array($row))
 {
  $blurb=$news['blurb'];
  $date=$news['post_date'];
  $id=$news['news_id'];
  $tag=$news['upcoming_sport_flag'];
  $event_type=$news['event_type'];
  //$_SESSION['abc']=$news['news_id'];
  $event_date=$news['event_date'];
  $male_female=$news['male_female'];
  $game_name=$news['game'];
  $news_id=$news['news_id'];
  $event_id=$news['event_id'];
  //echo $male_female;
  echo '<div id="newslinks">';
  if($news_id>=$page_begin && $news_id<$page_end)
    {
		echo '<h3 class="headlines"><a id="news_link"  href="shownews.php?news_id='.$id.'&&event_date='.$event_date.'">'.$blurb."</a></h3>";
		//echo $blurb."<br>";
		echo "Posted on:&nbsp&nbsp".$date."<br>";
		if($tag=="game"&& $current_date<$event_date)

		echo "<p class='result'><a href='registration.php?event_type=".$event_type."&&event_date=".$event_date."&&male_female=".$male_female."&&game_name=".$game_name."&&event_id=".$event_id."'>"."Click to register"."</a>";
		echo '<br><hr>';
	}
 echo '</div>';
 }
 
 $page_num=$page;
 $rem=$rownum%10;
 $q=$rownum-$rem;

 if($page<$q/10)                                   
	{
	$page_num=$page+1;
	echo '<br><br><h4><a href="news.php?page='.$page_num.'">Next</a></h4>';
	}
 if($page!=0)
	{
    $page_num=$page-1;
	echo '<br><br><h4><a href="news.php?page='.$page_num.'">Previous</a></h4>';
	}
 
  mysqli_close($con);
 //}
 //require($DOCUMENT_ROOT . "template2.php");
 
?>

</div>
</body>
</html>
<?php
include "template_lower.html"
?>
