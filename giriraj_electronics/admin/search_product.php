<?php
include("header.php");
?>
	<a id='backTop'>Back To Top</a>
	<br /><div id="page-content" class="index-page" style="margin-top:100px">
<div class="container">
  <div class="info">
    <h1>Search</h1>
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
<tr><td><label class="control-label" for="email" required>Search Product</label></td>
<td>
<select name="search" class="form-control" onchange='checkvalue(this.value)'>
<option>-- select --</option>
<option value="Name" >Product Company</option>
<option value="Type" >Product Name</option>
</select><br />
</td></tr>
<tr><td>
</td>
<td>
<select id="a" style='display:none' class="form-control" name="pcompany" >
<option>--select Company--</option>
<?php
$q="select * from company";
$r=mysqli_query($con,$q);
while($row=mysqli_fetch_array($r))
{
?>
<option value="<?php echo $row['cname']; ?>"><?php echo $row['cname']; ?></option>
<?php
}
?>
</select>
<select id="b" style='display:none' name="pname" class="form-control" >
<option>--select Product Name--</option>
<?php
$q1="select * from proname";
$r1=mysqli_query($con,$q1);
while($row1=mysqli_fetch_array($r1))
{
?>
<option value="<?php echo $row1['p_name']; ?>"><?php echo $row1['p_name']; ?></option>
<?php
}
?>
</select>
</td></tr>
<tr><td colspan="2" ><br /><input type="submit" name="search_record" value="Search"  class="btn btn-success" style="background:#009900"/> <input type="reset" name="clear" value="Reset" class="btn btn-danger" style=" background:red"  /></td></tr>
</table> 
<script>
function checkvalue(val)
{
     if(val==="Name")
       document.getElementById('a').style.display='block';
    else
       document.getElementById('a').style.display='none'; 

	if(val==="Type")
       document.getElementById('b').style.display='block';
    else
       document.getElementById('b').style.display='none'; 
}

</script>
</form>
<?php
		if(isset($_POST['search_record']))
		{
		if($_POST['search']=='Type')
		{
		$query="select * from product where pname='".$_POST['pname']."'";
		}
		else
		{
		$query="select * from product where pcompany='".$_POST['pcompany']."'";
		}
		
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		if(mysqli_num_rows($result)> 0)
		{	
			?>
			<h4>Search Result</h4>
			<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	
	<style>
	#example_filter{
	    float: right;
		}
	</style>				
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );</script>
<div style="overflow:scroll">
			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
			<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Product Company</th>
			<th>Price</th>
			<th>Warrenty</th>
			<th>Stock</th>
			</tr>
			
				
			<?php
			while($row2=mysqli_fetch_array($result))
			{extract($row2);
				?>
				<tr>
				<td><?php echo $pid; ?></td>
				<td><?php echo $pname; ?></td>
				<td><?php echo $pcompany; ?></td>
				<td><?php echo $price; ?></td>
				<td><?php echo $warrenty; ?></td>
				<td><?php echo $stock; ?></td>
				</tr>
				<?php
			}
			?>
			</table>
            </div>
			<?php
			
		}
		else
		{
			echo "Record Not Found";
		}
			
		}
	
?>

	</DIV>
		<div id="services"></div>
		</div>

	<?php
	include("footer.php")
	?>