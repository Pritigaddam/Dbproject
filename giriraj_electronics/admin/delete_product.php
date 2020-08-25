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
    <h1>Delete Product Info</h1><!--<span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a></span>-->
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
  <div class="thumbnail"><img src="../images/26-1User_13-512.png" style="margin-top:-15px"/></div>
  <?php
 $query="delete from product where pid='".$_GET['id']."'";
 $res=mysqli_query($con,$query);
	if($res)
	{
		echo "<script>";
		echo "alert('Deleted Successfully');";
		echo "window.location.href='view_product.php';";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('Error!Record Does Not Exist');";
		echo "window.location.href='view_product.php';";
		echo "</script>";
	}
?>
</div>

		<!-- ////////////Content Box 01 -->
		<div id="services"></div>
		
		
	</div>
    </br>
	</br>
	</br>
	<?php
	include("footer.php")
	?>