<?php
 include "template_upper.html"
?>
<html>
    <body>
	  <h2><center>Welcome admin!<br>Please login to continue</center></h2>
	 <div id="login_box">
	   <div class="sidebar_top"></div>
        <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Login Section</h3>
             
			    <form action="admin.php" method="post" id="loginForm"> 
				    <p class="input">
					    UserName: <input type="text" name="user"><br>
					    Password: <input type="password" name="pass"><br>
					    
					    <input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
					    <input type="reset" name="reset" value="Reset Details">
					</p>
                </form>
        </div>
		<div class="sidebar_base"></div>
	</div>
	 </body>
	
</html>
<?php

if(isset($_POST['submit']))
{
  $user=$_POST['user'];
  $pwd=$_POST['pass'];
  if($user=="admin"&&$pwd=="admin")
	{
     header('Location:admin_options.php');
	}
 else
	echo "<center><h1 style='color:red'>"."wrong username or password!"."</h1></center>";
}
 ?>

<?php
 include "template_lower.html"
?>