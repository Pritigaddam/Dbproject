<?php
include("header.php");
//include("../config.php");
?>
	<!-- Header -->
	
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
	
		<!-- ////////////Content Box 01 -->
		<div id="services"></div>
		<style>
		.box-content .heading h2 {
    height: 55px;
    background: #DB4437;
    padding: 13px 0 0 0;
    position: relative;
    width: 100%;
    font-size: 28px;
    text-decoration: none;
    color: #fff;
}
		</style>
		<!-- ////////////Content Box 02 -->
		<section class="box-content box-2 box-style" id="menu">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">	
						<!--<h2>Menu</h2>-->
						<div class="intro">
						<h2>View Products</h2>
						</div>
	                </div>
				</div>
				<div class="row">
					<div class="col-xs-1"></div>
					<div class="col-xs-10">
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
					
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
      
					<tr style="">
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Company</th>
					<th>Price</th>
					<th>Warrenty</th>
					<th>Stock</th>
					<th>Action</th>
					</tr>
					</thead>
					<?php
					$query="select * from product";
					$res=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($res))
					{
					extract($row);
					?>
					<tr>
					<td><?php echo $pid; ?></td>
					<td><?php echo $pname; ?></td>
					<td><?php echo $pcompany; ?></td>
					<td><?php echo $price; ?></td>
					<td><?php echo $warrenty; ?></td>
					<td><?php echo $stock; ?></td>
					
					<td><a href="edit_product.php?id=<?php echo $pid; ?>" class="glyphicon glyphicon-edit" style="color:green" title="Edit Product Info"> </a> &nbsp;&nbsp;&nbsp;<a href="delete_product.php?id=<?php echo $pid; ?>" class="glyphicon glyphicon-trash" style="color:red"   onClick="return confirm('Are You Sure You Want To Deleted This record ?');"title="Delete Product"> </a>  </td>
					</tr>
					<?php
					}
					?>
					</table>
					
					</div>
					<div class="col-xs-1"></div>
				</div>
				</div>
			</div>
		</section>
		
			</div>
</br>
</br>
</br>
</br>
</br>
</br>		
<?PHP
include("footer.php");
?>
	
