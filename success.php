<?php
include "template_upper.html"
?>
<?php
	 $result=1;
	// $date=$_POST['date'];
	 if(isset($_POST['submit'])){
	 $blurb=$_POST['blurb'];
	 $topic=$_POST['topic'];
	 $news=$_POST['news'];
     $date=date("Y-m-d");
     $upcoming_sport_flag=$_POST['sel']; 
	 $event_name=$_POST['event_name'];
	 $event_date=$_POST['event_date'];
   // echo $date;  
         
	 $event_type=$_POST['event_type'];
	 $male_female=$_POST['male_female'];
	 //echo $male_female;
 
	 require_once "dbconnect.php";
	 $id=mysqli_query($con,"select * from news ") or die("error here:".mysql_error());
         
	 $largest=0;
	 $id_val=0;
      if($id)
	   {
	     while($row=mysqli_fetch_array($id))
                {
                
                $id_val=$row['news_id'];
                if($upcoming_sport_flag=="game")
                if($largest<$row['event_id'])
                     {
                       $largest=$row['event_id'];
                     }
               }
	   }
     if($upcoming_sport_flag=="game")
         $largest++;
	
	  
	  $id_val++;
     $result= mysqli_query($con,"insert into news(news_id,post_date,blurb,game,news,upcoming_sport_flag,event_name,event_date,
			   event_type,male_female,event_id) values('$id_val','$date','$blurb','$topic','$news','$upcoming_sport_flag',
			   '$event_name','$event_date','$event_type','$male_female','$largest') ") or die(mysql_error());}
	 echo "<div id='ack'>"; 	
	if($result)
	{
	
	echo "<h>"."news has been posted successfully"."</h><br>";
	echo "<a href='add_news.php'>"."publish more"."</a>";
	 }
	 echo "</div>";
	 
	 
	 
?>
<?php
include "template_lower.html"
?>