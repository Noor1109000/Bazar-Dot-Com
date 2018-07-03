<?php include("header.php"); ?>

<?php 


if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if($_SESSION['email'] && $_SESSION['password'] ){
  
  }
  
  else {
    header("Location: http://localhost/bazar/");
  }
 
     

 // $_SESSION['email'] = $email;
  //$_SESSION['password'] = $password;
	   


?>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
			
				<!-----------------content-box-1-------------------->
				<section class="content-box background-gray box-1 zerogrid">
			
					
			
				<article class=" background-gray"> 
				<div class="art-content">
				<div class="row">
						<a href="inc/logout.php" class="logout"><img src="images/logout.jpg" alt="" /></a>
				<h1>Admin Panel </h1>
				
				<div id='adminmenu' class="align-center">
					<ul>
					   <li><a href='addproduct.php'><span>Add Product</span></a></li>
					   <li><a href='updateproduct.php'><span>Update  Product</span></a></li>
					   <li><a href='deleteproduct.php'><span>Delete Product</span></a></li>
					</ul>
				</div>
				
			
				</div>
				</div>
				</article>
				
		<hr class="line">
		<!--////////////////////////////////////Footer-->
		
		<?php  include("footer.php");?>