<?php
include("header.php");
?>

<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	<!-- /////////////////////////////////////////Content -->
	<br /><div id="page-content" class="index-page" style="margin-top:100px">
	  
<div class="container">
  <div class="info">
    <h1>Generate Bill</h1><!--<span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a></span>-->
  </div>
</div>
<style>
.form-horizontal .control-label, .form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline {
    margin-top: 0;
    margin-bottom: 5px;
    padding-top: 0;
}


*{
	box-sizing: border-box;
	padding: 0;
	margin: 0;
    font-size: 16px;

}


/* Form Style */


section {
  width: 500px;
  margin: 60px auto;
  border: 1px solid #99ffff;
  height: 570px;
  padding: 0;

}

h1 {
  color: #ffffff;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  text-align: center;
  vertical-align: middle;
  padding: 5px;
  margin: 0 0 20px 0;

}



.input-adjust {
  width: 450px;
  height: 35px;
  border-radius: 5px;
  padding: 5px;
  margin: 10px 0 10px 0;

}



form {
  width: 470px;
  height: 470px;
  padding-left: 10px;
  margin: 0 auto;
 

  
}

input[type=submit] {
  height: 50px;
  font-size: 20px;
  color: #ffffff;
  background-color: #009900;

}

label {
  font-weight: bold;

     
}


/* Scheduling Form */


textarea {
	width: 450px;
	height: 100px;
}

.timezone {
	margin: 10px 0;
	width: 450px;
}

.scheduling {
	width: 500px;
	height: 650px;
	border: 1px solid #99ffff;

}


/* Sign In Form */


.link {
	margin: 0 10px;
}


.label {
	margin-right: 150px;
	position: relative;
	top: -10px;
}

#logged-in {
	width: 30px;

}


/* Shipping and Billing Form */


.billing {
	width: 650px;
	height: 1250px;
	border: 1px solid #99ffff;
	padding: 0;
}

.info {
	margin: 10px 0;
}



/* Credit Card Form */


#csv {
	width: 100px;
	margin: 0 60px 10px 0;
}

.csv-info {
	font-size: 12px;
	line-height: 1.2em;
	margin: 5px 0;
}


/* Questionnaire */ 


input[name=ice-cream-input], input[name=animal-input] {
    width: 200px;
    position: relative;
    top: -50px;
    left: 80px;
    
}

.radio-adjust {
   width: 450px;
  height: 35px;
  border-radius: 5px;
  padding: 5px;
  margin: 10px 0 10px 0;
  position: relative;
  right: 220px;
  
}

.animal, .ice-cream {
  margin-top: 30px;
}

.option {
	 font-weight: 400;
     position: relative;
     top: -45px;
     left: 50px;
	}

.question {
	width: 500px;
	height: 1100px;
	border: 1px solid #99ffff;


}

input[type=radio] {
    margin: 0 5px 15px 15px;
   
}


/* Product Listing */


.shop {
	width: 1100px;
	position: relative;
	top: 50px;
	left: 230px;
    padding-bottom: 100px;
  

}

.shop h4 {
  margin: 10px 0;
}
.shop p {
  line-height: 1.5em;
}


.product {
  padding: 5px;
  margin-bottom: 15px;
 
}

.qty {
  width: 50px;
  margin-right: 10px;
  text-align: center;
}


caption {
  font-size: 24px;
  margin: 20px 0;
}

.cart {
  border-top: 2px solid black;
  margin-top: -15px;
 
 
}

.cart-title , .more-title {
	font-weight: 600;
}

.cart-title, .cart-detail, .more-title, .grand-total {
	text-align: center;
}


.promo-input {
	border: 1px solid black;
}


.price {
	margin: 10px 0;
}


table {
    border-collapse: collapse;
    width: 100%;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}


.btn-apply, .button {
	background-color: #33ff33;
	padding: 5px;
}

 .keep-shopping:hover {
	background-color: #0066ff;
 }

 .keep-shopping:active {
 	background-color: #cc33ff;
 }
 
 .btn-danger
 {
  background-color:red;
  }
 
</style>

<div class="form" style="max-width:550px">
  <div class="thumbnail"><img src="../images/26-1User_13-512.png" style="margin-top:-15px"/>
  </div>
<form method="post">  
  <fieldset class="info">
<h1>Billing Information</h1>
<label>First name<input class="input-adjust" type="text" id="firstname" name="firstname"></label>
<label>Last name<input class="input-adjust" type="text" id="lastname" name="lastname"></label>
<label>Address<input class="input-adjust" type="text" id="address" name="address"></label>
<label>City<input class="input-adjust" type="text" id="city" name="city"></label>
</fieldset>

<select  name="pname" class="form-control" id="prod_select" required>
	<option>Select Product</option>
	<?php
				$sql='select * from product';
				$r=mysqli_query($con,$sql);
				while($rr=mysqli_fetch_array($r))
				{
					?>
					<option value="<?php echo $rr['pid'],"#".$rr['pname'],"#".$rr['price']; ?>"><?php echo $rr['pname']; ?></option>
					<?php
				}
	?>
	</br>
</select>
</br>
<label>Quantity<input class="input-adjust" type="text" id="quantity"></label>
<input class="input-adjust" type="button" value="Add Product" id="addproduct">

<table id="productTable" style="width:100%">
  <tr>
    <th>Sr No</th>
    <th>Item Name</th>
    <th>Unit Price</th>
	<th>Quantity</th>
	<th>Total Price</th>
  </tr>
 
	
 </table> 
 </br>
<div class="display_inline">
 Grand Total
</div>
<div class="display_inline">
<p id="grandtotal" name="grandtotal" style="margin-left:377px;"></p>
</div>
<style>

div.display_inline,.display_inline p  {
   display: inline;
}

body
{
    counter-reset: Serial;           /* Set the Serial counter to 0 */
}

tr td:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content: counter(Serial); /* Display the counter */
}

</style>

</br>
</br>
<div class="display_inline">
<input type="submit" name='generate_bill' value="Generate Bill" class='btn btn-success'>
</div>
<div class="display_inline">
<input type="button" name='cancel' value="Cancel Bill" class='btn btn-danger' style='background-color:red;'>
</div>

</form>
</div>

<?php
if(!empty($_REQUEST['generate_bill']))
{
	//echo "<pre>REQUEST ARRAY :"; var_dump($_REQUEST); echo "</pre><br>";
	
	$firstname=$_REQUEST['firstname'];
	$lastname=$_REQUEST['lastname'];
	$cust_add=$_REQUEST['address'];
	$cust_city=$_REQUEST['city'];
	
		$sql_into_customer_bill_header = "INSERT INTO customer_bill_header(customer_fname, customer_lastname, customer_add,customer_city) VALUES ('".$firstname."', '".$lastname."', '".$cust_add."','".$cust_city."')";
					if ($con->query($sql_into_customer_bill_header) === TRUE) 
					{
							//echo "New record created successfully"."<br>";
							 $last_id = $con->insert_id;
							// echo "Last Insert ID is :".$last_id;
					} 
					else 
					{
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
	
						foreach($_REQUEST['custId'] as $key=>$value)
								{
									//echo "<pre>value :"; var_dump($value); echo "</pre><br>";
									$arr_elements=explode(",",$value);
									/*echo "<pre>"; var_dump($arr_elements); echo "</pre><br>";
									echo "<pre>product name "; var_dump($arr_elements[0]); echo "</pre><br>";
									echo "<pre>product unit price "; var_dump($arr_elements[1]); echo "</pre><br>";
									echo "<pre>product qty "; var_dump($arr_elements[2]); echo "</pre><br>";
									echo "<pre>total price "; var_dump($arr_elements[3]); echo "</pre><br>";*/
									
									$inser_into_customer_bill_details="INSERT INTO customer_bill_detail(header_id,product_name,product_unit_price,product_qty,total_price)VALUES('".$last_id."','".$arr_elements[0]."','".$arr_elements[1]."','".$arr_elements[2]."','".$arr_elements[3]."')";
									
										if ($con->query($inser_into_customer_bill_details) === TRUE) 
										{
												//echo "New Bill Details created successfully"."<br>";
												 echo '<script type="text/javascript">alert("Generated Bill Successfully");</script>';
										} 
										else 
										{
											echo "Error: " . $sql . "<br>" . $conn->error;
										}
										
									
								}
	
	//exit();
}
else
{
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){ 
			
			var num = 0;
			jQuery("#addproduct").click(function(){
				//alert("Add Product Button Clicked");
				var product_detail=jQuery("#prod_select").val();
				var arr_product_detail = product_detail.split('#');
				console.log('Product Primary Id '+arr_product_detail[0]);
				console.log('Product Name '+arr_product_detail[1]);
				console.log('Product Unit Price '+arr_product_detail[2]);
				
				var product_primary_id=arr_product_detail[0];
				var product_name=arr_product_detail[1];
				var product_unit_price=arr_product_detail[2];
				var product_quantity=jQuery("#quantity").val();
				var total_price=product_quantity*product_unit_price;
				
				
				console.log('Quantity is :'+product_quantity);
				console.log('Total Price is :'+total_price);
				
				 $("#productTable tbody").append(
					  "<tr>" +
						"<td></td>" +
						"<td>"+product_name+"</td>" +
						"<td>"+product_unit_price+"</td>" +
						"<td>"+product_quantity+"</td>" +
						"<td class='price'>"+total_price+"</td>" +
						"<input type='hidden' id='custId' name='custId[]' value='"+product_name+","+product_unit_price+","+product_quantity+","+total_price+"'>"+
					"</tr>"
				  );
  
				var sum = 0;
						$('.price').each(function() {
							sum += parseFloat($(this).text());
						});
						$('#grandtotal').html(sum)
				
			  });
});
</script>
<?php
	include("footer.php")
	?>

