<?php

include "template_upper.html"
?>

<?php


echo'
<html>

  <head>
   <script> 
     function hide()
	{
		 abc=document.getElementById("event");
		 abc.style.display="none";
		 
	}
	function func(a)
	{
             if(a=="game")
              {
	         abc=document.getElementById("event");
                 abc.style.display="block";
	      }
             else{
                 abc=document.getElementById("event");
                 abc.style.display="none";
              }
	}
	function validateForm()
	{
		var x = document.forms["myForm"]["blurb"].value;
		var y = document.forms["myForm"]["topic"].value;
		var z= document.forms["myForm"]["news"].value;
		var a = document.forms["myForm"]["sel"].value;
		var b= document.forms["myForm"]["event_name"].value;
		var c = document.forms["myForm"]["event_date"].value;
		var d = document.forms["myForm"]["event_type"].value;
		var e = document.forms["myForm"]["male_female"].value;
		if (x == null || x == "" || y=="--" ||z==null||z==""||a=="0") 
		{
			alert("one or more fields left unfilled");
			return false;
		}
		if(a=="game")
		{
			if(b==""||b==null||c==null||c==""||d=="0"||e=="0"){
				alert("Please ensure all fields are properly filled");
				return false;
			}
		}
    }
    </script>     
  </head>
	<body onload="hide()"> 
           <div id="news_upload" >
		   <h2>Please enter the details here</h2>
		<form action="success.php" method="post" name="myForm" onsubmit="return validateForm();">
			
			   <p><b>Blurb:<br></b><textarea rows="2" cols="30" name="blurb"></textarea></p>
			   <b>Topic:</b><select name="topic"><option value="--">--</option><option value="administration">Administration</option><option value="athletics">Athletics</option><option value="badminton">Badminton</option><option value="cricket">Cricket</option><option value="football">Football</option><option value="hockey">Hockey</option><option value="tabletennis">Table Tennis</option><option value="tennis">Tennis</option></select></p><br>
			<b><p>News:<br><textarea rows="10" cols="50" name="news"></textarea></p><br>
                       <p> Tag:<select name="sel"  onchange="func(this.value)"><option value="0">choose tag</option><option value="game" >Upcoming sport meet</option><option value="general_info" >General info</option></select><br>
                      <div id="event">
                        <p>Enter the event name:<input type="text" name="event_name"></p><br>
                        <p>Enter the event date:<input type="date" name="event_date"></p><br>
                        <p>Type of event:<select name="event_type" ><option value="0">--</option><option value="team" >Team event</option><option value="individual" >Individual</option><option type="both" >Both</option></select>&nbsp&nbsp&nbsp&nbsp&nbsp
                        <select name="male_female"><option value="0">--</option><option value="male">Male</option><option value="female">Female</option><option value="Both">Both</option></select></b></p>
                      </div>
			
			<input type="submit" value="Publish" name="submit">
			<p></p>
		</form>
            </div>

	</body>

</html> ';

?>




<?php
include "template_lower.html"
?>