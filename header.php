<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<title>Bazar.Com</title>
	
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">

	
	<!-- Custom Fonts -->
   
	
	<link rel="stylesheet" href="css/menu.css">
	
	
	
</head>
<body>
<div class="wrap-body">
<section class="stickyHeader">

<div class="itemCount" >
<a href=""><img src="images/cart.jpg" alt="" /><div class="display">0


</div></a>

</div>
</section>
	<header class="zerogrid">
		<div class="logo">
			<hr class="line-1">
			<a href="#">Bazar.Com</a>
			<span>Daily Commodities Retail Product Information</span>
			<hr class="line-1">
		</div>
		<div id='cssmenu' class="align-center">
			<ul>
			   <li class="active"><a href='index.php'><span>Home</span></a></li>
			  
			   <li><a href='product.php'><span>Top Product</span></a></li>
			  <li><a href='product_price.php'><span>Price List</span></a></li>
			  <li><a href='about.php'><span>About Us</span></a></li>
			  
			    <li><a href='login.php'><span>Login</span></a>
				  <ul >
					 <li class='has-sub'><a href='registration.php'><span>Registration</span></a>
						
					 </li>
					 <?php 
					 if(!isset($_SESSION)) 
    { 
        session_start(); 
		
    }
	  if(isset($_SESSION['email']) && isset($_SESSION['password']) ){
  
  
					 
 // $_SESSION['email'] = $email;
  //$_SESSION['password'] = $password;
	   
  
   ?>
					  <li class='has-sub'><a href='admin.php'><span>Admin</span></a>
						
					 </li>
					 <?php } ?>
					 
				  </ul>
			   </li>
			</ul>
		</div>
	</header>