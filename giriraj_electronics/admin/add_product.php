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
    <h1>Add Product</h1><!--<span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a></span>-->
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
 
<table width="100%">
<tr><td><label class="control-label" for="email">Product ID:</label></td><td><input type="text" name="pid" class="form-control" value="
<?php $qury=mysqli_query($con,"SELECT pid from product ORDER BY pid DESC LIMIT 1");
	$result=mysqli_num_rows($qury);
				  if($result>0)
				 
				 {
					  while($row=mysqli_fetch_assoc($qury))
				 {
					 extract($row);
					 echo $pid +1;
}

}else
{
echo $id=1;
} ?>"  required readonly="readonly" ></td></tr>

<tr><td><label class="control-label" for="email">Product Name</label></td>
<td>
<select  name="pname" class="form-control" required>
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
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
<tr><td><label class="control-label" for="email">Company</label></td>
<td>
<select required name="pcompany" class="form-control">
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
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
<tr><td><label class="control-label" for="email">Price</label></td><td><input name="price" class="form-control" required></td></tr>
<tr><td><label class="control-label" for="email">Warrenty</label></td><td><input type="number" name="warrenty" class="form-control" required ></td></tr>
<tr><td><label class="control-label" for="email">Stock</label></td><td><input type="text" name="stock" class="form-control" required  ></td></tr>
<tr><td colspan="2" ><br /><input type="submit" name="product" value="ADD"  class="btn btn-success" style="width:15%; background:#009900"/> &nbsp;&nbsp;&nbsp;<input type="reset" name="clear" value="Reset" class="btn btn-danger" style="width:15%; background:red"  /></td></tr>

</table> 
</form>
<?php
if(isset($_POST['product']))
{
	$query="insert into product(pid,pname,pcompany,price,warrenty,stock)values('".$_POST['pid']."','".$_POST['pname']."','".$_POST['pcompany']."','".$_POST['price']."','".$_POST['warrenty']."','".$_POST['stock']."')";
	$res=mysqli_query($con,$query)or die(mysqli_error($con));
	if($res)
	{
		echo "<script>";
		echo "alert('Added Successfully');";
		echo "window.location.href='add_product.php';";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('Error!Not Added');";
		echo "window.location.href='add_product.php';";
		echo "</script>";
	}
}
?>
</div>

		<!-- ////////////Content Box 01 -->
		<div id="services"></div>
		
	<?php
	include("footer.php")
	?>