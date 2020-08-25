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
    <h1>Edit Product Info</h1><!--<span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a></span>-->
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
 <form class="form-horizontal" action="" method="post">
 <?php
 $query="select * from product where pid='".$_GET['id']."'";
 $res=mysqli_query($con,$query);
 $row=mysqli_fetch_array($res);
 ?>
<table width="100%">
<tr><td><label class="control-label" for="email">Product ID:</label></td><td><input type="number" name="doctor_id" class="form-control" value="<?php echo $row['pid'] ?>"  required ></td></tr>

<tr><td><label class="control-label" for="email">Product Name</label></td>
<td>
<select name="pname" class="form-control">
<option>---select Product---</option>
<?php
$sql='select * from proname';
$r=mysqli_query($con,$sql);
while($rr=mysqli_fetch_array($r))
{
	?>
	<option value="<?php echo $rr['p_name']; ?>"><?php echo $rr['p_name']; ?></option>
	<?php
}
?>
</br>
</select>
</td></tr>

<tr><td><label class="control-label" for="email">Company</label></td>
<td>
<select name="pcompany" class="form-control">
<option>---select company---</option>
<?php
$sql='select * from company';
$r=mysqli_query($con,$sql);
while($rr=mysqli_fetch_array($r))
{
	?>
	<option value="<?php echo $rr['cname']; ?>"><?php echo $rr['cname']; ?></option>
	<?php
}
?>
</br>
</select>
</td></tr>
<tr><td><label class="control-label" for="email">Price</label></td><td><input type="text" name="mobile_no" class="form-control" value="<?php echo $row['price']; ?>" required  ></td></tr>
<tr><td><label class="control-label" for="email">Warrenty</label></td><td><input type="number" name="education" class="form-control" value="<?php echo $row['warrenty'] ?>" required  ></td></tr>
<tr><td><label class="control-label" for="email">Stock</label></td><td><input type="text" name="doctor_email" class="form-control" value="<?php echo $row['stock'] ?>" required ></td></tr>
<tr><td colspan="2" ><br /><input type="submit" name="update_product" value="Update"  class="btn btn-success" style="width:20%; background:#009900"/> &nbsp;&nbsp;&nbsp;<input type="submit" name="clear" value="Cancel" class="btn btn-danger" style="width:20%; background:red"  /></td></tr>
</table> 
</form>
<?php
if(isset($_POST['clear']))
{
echo "<script>";
echo "window.location.href='view_product.php';";
echo "</script>";
}
?>
<?php
if(isset($_POST['update_product']))
{
	$query="update product set pid='".$_POST['doctor_id']."',pname='".$_POST['pname']."',pcompany='".$_POST['pcompany']."',price='".$_POST['mobile_no']."',warrenty='".$_POST['education']."',stock='".$_POST['doctor_email']."' where pid='".$_GET['id']."'";
	$res=mysqli_query($con,$query)or die(mysqli_error($con));
	if($res)
	{
		echo "<script>";
		echo "alert('Updated Successfully');";
		echo "window.location.href='view_product.php';";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('Error!Not Added');";
		echo "window.location.href='view_product.php';";
		echo "</script>";
	}
}
?>
</div>

		<!-- ////////////Content Box 01 -->
		<div id="services"></div>
		<?php /*?><section class="box-content box-1">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 ">
						<a href="#"><div class="service">
							<img src="76795-200.png" title="icon-name" title="Admin Login" style="height:100px">
							<h3>Admin Login</h3>
							<p>Admin Have authority to do various Functionalities Like Add Docter,disease. View Patient,diseases,feedback etc </p>
							<a class="btn btn-2 btn-sm" href="#">Admin Login</a>
						</div></a>
			 		</div>
			 		<div class="col-sm-4 ">
						<div class="service">
							<a href="#"><img src="27715-200.png" title="icon-name" title="Docter Login" style="height:100px"></a>
							<h3>Docter Login</h3>
							<p>Docter get notification,<br> they can view patient details<br> view disease symptoms. </p>
							
							<a class="btn btn-2 btn-sm" href="#">Docter Login</a>
						</div>
			 		</div>
			 		<div class="col-sm-4 ">
						<div class="service">
							<a href="#"><img src="27705-200.png" title="icon-name" title="Patient Login" style="height:100px"></a>
							<h3>Patient</h3>
							<p>Register Patient can  see docter,<br>search disease <br>provide feedback for system  </p>
							<a class="btn btn-2 btn-sm" href="#">Patient Login</a>
						</div>
			 		</div>		
				</div>
			</div>
		</section>
	<?php */?>
		
	</div>

	<?php
	include("footer.php")
	?>