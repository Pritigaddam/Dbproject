<?php
include("header.php");
?>
	<!-- Header -->
	
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	<!-- /////////////////////////////////////////Content -->
	<br /><div id="page-content" class="index-page" style="margin-top:100px">
	  
<div class="container">
  <div class="info">
    <h1>Change Password</h1><!--<span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a></span>-->
  </div>
</div>
<style>
.form-horizontal .control-label, .form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline {
    margin-top: 0;
    margin-bottom: 5px;
    padding-top: 0;
}
</style>
<div class="form" style="max-width:550px">
  <div class=""><img src="../images/cp.png" style="margin-top:-15px" class=""/><br /></div><br />
 <form class="form-horizontal" action="" method="post">
 
<table width="100%">
<tr><td><label class="control-label" for="email">Old Password: </label></td><td><input type="password" class="form-control" id="form-field-8" placeholder="Enter Old Password" name="pass" required /></td></tr>

<tr><td><label class="control-label" for="email">New Password: </label></td><td><input type="password" class="form-control" name="pass1" placeholder="Enter New Password" id="password"  maxlength="15"  required /></td></tr>

<tr><td><label class="control-label" for="email">Confirm Password: </label></td><td><input type="password" class="form-control" placeholder="Re-enter New Password" id="confirm_password" name="pass2" required /></td></tr>
<tr><td colspan="2" ><br /><input type="submit"name="btn_update" value="Change Password"  class="btn btn-success" style="width:15%; background:#009900"/> &nbsp;&nbsp;&nbsp;<input type="reset" name="clear" value="Reset" class="btn btn-danger" style="width:15%; background:red"  /></td></tr>
</table> 
</form>
<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<?php
														 
if(isset($_POST['btn_update']))
{
	
	 $query = 'select * from user where  password="'.$_POST['pass'].'"and email ="'.$_SESSION['admin_email'].'" ';


$res=mysqli_query($con,$query);

if(mysqli_num_rows($res)>0)
{
if (false === $res) {
    echo mysql_error();}
if(strlen($_POST['pass1']) >= 5 )
	{
		if($_POST['pass1']==$_POST['pass2'])
		{
		$query1='update user set password="'.$_POST['pass1'].'" where email ="'.$_SESSION['admin_email'].'" ';	
$res=mysqli_query($con,$query1);

		  echo '<script type="text/javascript">'; 
          echo 'alert("Password is changed");'; 
	      echo 'window.location.href = "change_password.php";'; 
          echo '</script>';
		}
		else
		{
		echo '<script type="text/javascript">';
	    echo 'alert(" password is not matched...  try again");'; 
	    echo 'window.location.href = "change_password.php";'; 
        echo '</script>';
		}
	}
else 
{
	echo '<script type="text/javascript">';
	echo 'alert(" password is greater than 6");'; 
	echo 'window.location.href = "change_password.php";'; 
    echo '</script>';
}
}
else
{
	echo '<script type="text/javascript">';
	echo 'alert("Old password is not matched...  try again");'; 
	// $query1;
	//echo 'window.location.href = "change_password.php";'; 
    echo '</script>';
			

}
		   }
?></div>

		<!-- ////////////Content Box 01 -->
		<div id="services"></div>
		
	</div>

	<?php
	include("footer.php")
	?>