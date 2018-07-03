<?php include("header.php"); ?>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content zerogrid ">
					<section class="banner">
				<img src="images/landing_top_banner.jpg" alt="" />
				</section>
						<article class="background-gray">
							<div class="art-header">
								<hr class="line-2">
								<h2> Retail product Price</h2>
							</div>
						
						
						<div class="art-content"> 
							<div class="row"> 
							<?php
									
										include("inc/constant.php");
										
										$sql = "SELECT *  FROM prduct";
										$result = $conn->query($sql);

										
									
									?> 
								<h3>Price Compare</h3>
								<form action="show.php" method="POST" id="cart-form">
								<table> 
								<tr>
											<th>Add To Cart</th>
											<th>Quantity (Kg)</th>
											<th>Product Name</th>
											<th>Product Price</th>
										
										</tr>
							<?php if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {?>
											
											
											<tr> 
											<td><input type="checkbox" class="cart" name="product[]" value="<?php echo $row["id"] ?>" /></td>
											<td><input type="text" name="qty[]" value="1" /></td>
											<td><?php echo $row["product_name"] ?></td>
											<td><?php echo $row["rajgangBazar_price"] ." tk" ?></td>
							
										
										</tr>
										<?php 	}
										} ?>
							</table>
							
							<input type="submit" class="sendButton" value="submit" />
							</form>
							</div>
						
						</div>
						</article>
					
					</div>
				</div>
			</div>
		</section>
		<hr class="line">
		<!--////////////////////////////////////Footer-->
	
	

		<?php  include("footer.php");?>
		
		
		