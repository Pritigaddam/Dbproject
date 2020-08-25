<?php 

//include("header.php"); 
include("../config.php");
//echo "<pre>"; var_dump($_GET["get"]); echo "</pre><br>";
$billid=$_GET["get"];

$sql_query="SELECT * FROM `customer_bill_header` AS CB INNER JOIN customer_bill_detail AS CBD ON CB.ID=CBD.header_id WHERE CBD.HEADER_ID='".$billid."'";
$result=mysqli_query($con,$sql_query);
//echo "<pre>result "; var_dump($result); echo "</pre>";


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<style>
#invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="../images/26-1User_13-512.png" data-holder-rendered="true"  style="margin-top:-15px;height:124%;"/>
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                            GIRIRAJ ELECTRONICS
                            </a>
                        </h2>
                        <div>3828, Ghumare Lane, Nalegaon, Ahmednagar</div> 
                        <div>(+91) 99999999</div>
                        <div>girirajinfo@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
			<?php 
						while($result_csutomer=mysqli_fetch_array($result))
								{
									/*echo "<pre>"; var_dump($result_csutomer); echo "</pre><br>";
									echo "<pre>customer first name :"; var_dump($result_csutomer['customer_fname']); echo "</pre><br>";*/
									$customer_first_name=$result_csutomer['customer_fname'];
									$customer_last_name=$result_csutomer['customer_lastname'];
									$customer_add=$result_csutomer['customer_add'];
									$customer_city=$result_csutomer['customer_city'];
									
								}
								
								?>
			<div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
						
                        <h2 class="to"><?php echo $customer_first_name.' '.$customer_last_name;?> </h2>
                        <div class="address"><?php echo $customer_add;?></div>
                        <div class="email"><a href=""><?php echo $customer_city;?></a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE <?php echo $_GET["get"];?></h1>
                        <!--<div class="date">Date of Invoice: 01/10/2018</div>
                        <div class="date">Due Date: 30/10/2018</div>-->
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right">UNIT PRICE</th>
                            <th class="text-right">QTY</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
					<!-- while loop again-->
					<!-- while loop again-->
						<?php
						
							$sql_product_details_query="SELECT * FROM `customer_bill_detail` WHERE `header_id` = '".$_GET['get']."'";
							$result_line_detail=mysqli_query($con,$sql_product_details_query);
							$counter = 0;
							while($row_item_detail=mysqli_fetch_array($result_line_detail))
							{
								
								?>
								 <tr>
											<td class="no"><?php echo ++$counter; ?></td>
											<td class="text-left"><h3>
												<a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
												<?php echo $row_item_detail['product_name'];?>
												</a>
												</h3>
											   <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
												   
											   </a> 
											   
											</td>
											<td class="unit"><?php echo $row_item_detail ['product_unit_price'];?></td>
											<td class="qty"><?php echo $row_item_detail ['product_qty'];?></td>
											<td class="total"><?php echo $row_item_detail ['total_price'];?></td>
										</tr>
								<?php
							}
							
						?>
					
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
							<?php 
							$sql_sum_query="SELECT SUM(total_price) as summation FROM `customer_bill_detail` WHERE `header_id` ='".$_GET['get']."'";
							$result_sum_query=mysqli_query($con,$sql_sum_query);
							while($row_sum_query=mysqli_fetch_array($result_sum_query))
							{
									
								?>
										<td><?php echo $row_sum_query['summation'];?></td>
										<?php $total_final_price=$row_sum_query['summation']; ?>
								<?php
							}
							
							?>
                          <!--<td>$5,200.00</td>-->
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td><?php echo $total_final_price;?></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                   <!-- <div>NOTICE:</div>
                    <div class="notice"></div-->
                </div>
            </main>
			
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

<script>
 $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>