<?php
/*$res=mysqli_query($con,$query)or die(mysqli_error($con));
if (!$res)
  {
  die("Connection error: " . mysqli_connect_error());
  }
$res='SELECT bid,date,total from bill';
$query = mysqli_query($db,$res) */ 
?>

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
    <h1>Bill List</h1><!--<span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a></span>-->
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
			
			<div class="main">
			<h class="log"><b>Bill Details</b></h><br>
			</div>
			<form method="post">
			<select  name="pname" class="form-control" id="prod_select" required>
					<option>Select Bill For Customer</option>
					<?php
								$sql='select DISTINCT id from customer_bill_header';
								$r=mysqli_query($con,$sql);
								while($rr=mysqli_fetch_array($r))
								{
									?>
									<option value="<?php echo $rr['id']; ?>"><?php echo $rr['id']; ?></option>
									<?php
								}
					?>
					</br>
				</select>
				</br>
				<input type="submit" name="searchbill" class='btn btn-success' value="Search Bills" style="background-color:#5cb85c">
				</form>
				
				<?php 
						if(!empty($_REQUEST['searchbill']))
						{	
						
							$i = 0;
								echo '<table style="width:100%">
										<tr>
										<th>Item Name</th>
										<th>Unit Price</th>
										<th>Quantity</th>
										<th>Total Price</th>
										<th>Print</th>
									</tr>';
							//echo "<pre>"; var_dump($_REQUEST['pname']); echo "</pre>";
								$sql_Select_details_for_bill="SELECT * FROM  `customer_bill_detail` WHERE `header_id` ='".$_REQUEST['pname']."'";
								$res=mysqli_query($con,$sql_Select_details_for_bill);
								while($row=mysqli_fetch_array($res))
								{
											echo '<tr>
											<td>'.$row['product_name'].'</td>
											<td>'.$row['product_unit_price'].'</td>
											<td>'.$row['product_qty'].'</td>
											<td>'.$row['total_price'].'</td>
											<td><a href="printbill.php?&get='.$_REQUEST['pname'].'" target="_blank">Print Bill</a></td>
											</tr>';
											
								}
							echo "</table>";
						}
						else
						{
						}
						
				
				?>
				
				<style>
				table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
				</style>
	  </div>
			
	<?php
	include("footer.php")
	?>