<?php include("header.php"); ?>


		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
			
				<!-----------------content-box-1-------------------->
				<section class="content-box background-gray box-1 zerogrid">
				<section class="banner">
				<img src="images/banner.jpg" alt="" />

			</section>
					
			
				<article class=" background-gray"> 
				<div class="art-content">
				<div class="row">
						
				<div id="contact_form">  
					<h1>Registration</h1>
					<form name="form1" id="ff" class="login-form"method="post" action="inc/userregister.php">
					<div class="row">
							
								<div class="wrap-col">
							<input type="text" name="name" id="name" placeholder="Enter Name" required="required" />
								</div>
							
					</div>
					<div class="row">
							
								<div class="wrap-col">
							<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
								</div>
							
					</div>
				<div class="row">
							
								<div class="wrap-col">
							<input type="text" name="number" id="number" placeholder="Enter number" required="required" />
								</div>
							
					</div>
					
					<div class="row">
							
								<div class="wrap-col">
							<input name="password" id="password" placeholder="Enter Password" required="required" type="password">
								
							</div>
					</div>
					
					<center><input class="sendButton" name="Submit" value="Submit" type="submit"></center>
					
					</form>
				
				
				</div>
				
				
			
				</div>
				</div>
				</article>
				
		<hr class="line">
		
		<?php  include("footer.php");?>