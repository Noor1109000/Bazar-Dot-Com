<?php include("header.php"); ?>


<?php


// PHP CODE FOR SHOW PRICE COMPARISON BETWEEN DIFFERENT MARKET 


$count=0;
$bazar1=0;
$bazar2=0;
$bazar3=0;
if(!empty($_POST['product'])) {
$product_id= $_POST['product'];
$qty= $_POST['qty'];

$count=sizeof($product_id);
							}		
include("inc/constant.php");
 ?>



<section id="container">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content  zerogrid cart-page">
					<div class="art-content ">


								<table> 
								<tr>
											<td>Product ID</td>
											<td>Product Name</td>
											<td>Quantity (Kg)</td>
											<td colspan="2" class="high1">BoardMarket Bazar </td>
											<td colspan="2" class="high2">Nimshar Bazar </td>
											<td colspan="2" class="high3">Rajgang Bazar </td>
										
										</tr>
							
											
										<?php for($i=0;$i<$count;$i++){ ?>
											<tr> 
											<?php 
							$sql = "SELECT *  FROM prduct WHERE id=$product_id[$i] ";
$result = $conn->query($sql);
							if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {?>
											<td><?php echo $row["id"] ?></td>
											<td><?php echo $row["product_name"] ?></td>
											<td><?php echo $qty[$row["id"]-1]  ?></td>
											<td class="high1">Price: <?php echo $row["boardmarket_price"] ?></td> 
											<td class="high1">Total: <?php  $totlprice=$row["boardmarket_price"] * $qty[$row["id"]-1] ; echo $totlprice; $bazar1=$bazar1+$totlprice; ?>  </td>
											<td class="high2" >Price: <?php echo $row["nimshar_price"] ?></td>
											<td class="high2">Total :<?php $totlprice2= $row["nimshar_price"] * $qty[$row["id"]-1] ; echo $totlprice2; $bazar2=$bazar2+$totlprice2;  ?> </td>
											<td class="high3">Price: <?php echo $row["rajgangBazar_price"] ?></td>
											<td class="high3">Total : <?php $totlprice3= $row["rajgangBazar_price"] * $qty[$row["id"]-1] ; echo $totlprice3; $bazar3=$bazar3+$totlprice3; ?> </td>
											
											
											
											
											
											
											
							
										<?php 	}
										} ?>
										</tr>
										<?php }?>	
										
							</table>	


		
					
									
		
<div class="tprice"> <p style="font-weight:bold;">You have <?php echo $count?> product(s) in your cart</p>
					<p class="pdisplay">Board market: <br />
					<span class="color"> Payable Total : </span>
					
				<?php echo $bazar1; ?> Tk </p>
					<p class="pdisplay">Nimshar Bazar: <br />
					<span class="color"> Payable Total : </span><?php echo $bazar2; ?> Tk </p>
					<p class="pdisplay">Rajgang Bazar: <br />
					<span class="color"> Payable Total : </span><?php echo $bazar3; ?> Tk </p>
											
					
					
					
					</div>


						

</div>





</div>
</div>
</div>
</section>









		<?php  include("footer.php");?>