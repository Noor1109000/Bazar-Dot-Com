<?php include("header.php"); ?>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content zerogrid ">
					
					
						<article class="background-gray">
							<div class='embed-container '>
						<div class="art-content">
						<div class="maps">
						
						<div class="art-header">
						<div class="col-1-2">
								
								<h2>Bazar.Com</h2>
							</div>
							</div>
						<div class="col-1-2"><p>Contact Info
						{Write Your Contact Info} <br />
						Email: <br />
						Mobile:<br />
						Address:<br />
						Location:<br />
						
						</div>
							</div>
							</div>
							
							<div class="art-content">
								<div class="row">
								<div class="art-header">
								<hr class="line-2">
								<h2>Contact form</h2>
							</div>
									<div id="contact_form">
									
										<form name="form1" id="ff" method="post" action="contact.php">
											<label class="row">
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
													</div>
												</div>
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
													<input type="text" name="Phone" id="number" placeholder="Phone Number" required="required" />
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Message"></textarea>
												</div>
											</label>
											<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
										</form>
									</div>
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