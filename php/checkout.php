<?php
session_start();
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Checkout</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/lobster:n4:default.js" type="text/javascript"></script>
</head>

<body>
	<!-- top-header -->
<div class="header-most-top">
		<p>E-Auction Offer Zone Top Deals & Discounts</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->

<div>
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
      <!-- header-bot-->
      <div class="logo_agile col-md-12">
        <h1> <a href="index.php"> <span id="auction">E- Auction</span> <img src="images/eauction.png" alt=" " width="50"> </a> </h1>
      </div>
      <!-- header-bot -->
      <div class="header col-md-12">
        <!-- header lists -->
        <ul>
          <li> <a class="play-icon popup-with-zoom-anim" href="#small-dialog1"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Languages</a> </li>
          <li> <a href="https://www.usps.com/" target="_blank" data-toggle="modal"> <span class="fa fa-truck" aria-hidden="true"></span>Track Order</a> </li>
          <li> <span class="fa fa-phone" aria-hidden="true"></span> 123-456-7890 </li>
			<li>
			  <?php 
					echo "<h5><span class='fa fa-user-circle-o' aria-hidden='true'></span> Welcome: ".$_SESSION['username']."</h5>"; 
				?>	
				</li>
				<li>
						  <a href="logout.php">
							  <span class="fa fa-window-close-o" aria-hidden="true"></span> Log Out </a>
				  </li>

        </ul>
		  
		  
        <!-- //header lists -->
        <!-- search -->
        <div class="agileits_search">
          <form action="search.php" method="post" class="col-md-12" id="search2">
            <table width="200" border="1">
              <tbody>
                <tr> </tr>
              </tbody>
            </table>
            <input name="search" type="search" placeholder="What are you looking for?" required="">
            <button type="submit" class="btn btn-default" aria-label="Left Align"> <span class="fa fa-search" aria-hidden="true"> </span> </button>
          </form>
        </div>
        <div class="top_nav_right">
          <div class="wthreecartaits wthreecartaits2 cart cart box_1">
            <form action="checkout.php" method="post" class="last">
				  <input type="hidden" name="cmd3" value="_cart">
				  <input type="hidden" name="display" value="1">
				  <button class="w3view-cart" type="submit" name="submit"> 
					  <i class="" aria-hidden="true">My Shopping-cart</i>
				</button>
            </form>
          </div>
        </div>
        <!-- //search -->
        <!-- cart details -->
        <!-- //cart details -->
		  
      </div>
      <div class="ban-top">
        <div class="container">
          <div class="agileits-navi_search">
            <form action="categories.php" method="POST" id="catgoryselect2">
              <select id="agileinfo-nav_search" name="categories" >
				<option value = ''>All Categories</option>
				<option value="Automobile", name = "Automobile">Automobile</option>
                <option value="Electronics",name = "Electronics">Electronics</option>
                <option value="Grocery",name = "Grocery">Grocery</option>
                <option value="Household",name = "Household">Household</option>
                <option value="Personal Care",name = "Personal Care">Personal Care</option>
                <option value="Stationary",name = "Stationary">Stationary</option>
                <option value="Software",name = "Software">Software</option>
                <option value="Sports",name = "Sports">Sports</option>
                <option value="Toys",name = "Toys & Games">Toys & Games</option>
                <option value="Video Games",name = "Video Games">Video Games</option>
                <option value="Other",name = "Other">Other</option>
                <option value="Featured",name = "Featured">Featured</option>
              </select>
				
				<input type="submit" value="Browse"/>
			  </form>
          </div>
          <div class="top_nav_left">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav menu__list" id="menulist">
                    <li> <a class="nav-stylehead" href="index.php">Home <span class="sr-only">(current)</span> </a> </li>
					  <li class=""> <a class="nav-stylehead" href="additem.php">Sell Products</a> </li>
					  <li class=""><a class="nav-stylehead" href="profile_products.php">My Products</a></li>
                    <li class=""> <a class="nav-stylehead" href="contact.php">Contact Us</a> </li>
					  <li class=""> <a class="nav-stylehead" href="profile_ind.php">My information</a> </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
</div>
  </div>
</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	<div id="small-dialog1" class="mfp-hide">
	<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
	<!-- //shop locator (popup) -->
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Grocery Shoppy! Let's set up your Account.
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
							</div>
							<input type="submit" value="Sign Up">
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->	<!-- //navigation -->
	<!-- banner-2 -->	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 style="color: coral; font-size: 15px">Your shopping cart contains:
					<?php
					include_once("db.php");
					$owner=$_SESSION['username'];
					$sql="SELECT * from checkout where owner='$owner'";
					$result=mysqli_query($db,$sql);
					$row=mysqli_num_rows($result);
					echo $row;
					if($row==1 || $row==0){
						echo " product";
					} else {
						echo " products";
					}
					?>
				</4>
				<h5 style="color: cornflowerblue; font-size: 18px; font-display: block; border-bottom: ridge thin #ff0000">
					<?php
					include_once("db.php");
					$owner=$_SESSION['username'];
					$sql="SELECT SUM(price) as sum from checkout where owner='$owner'";
					$result=mysqli_query($db,$sql);
					$row=mysqli_fetch_array($result);
					if($row['sum']==''){
						echo "Total Price: $0";
					} else{
					echo "Total Price: <del>$".$row['sum']."</del>";
					echo "<br>";
					echo "<br>";
					echo "Discount Rate: 10%";
					$price=$row['sum']*0.9;
						echo "<br>";
					echo "<br>";
				echo "</h5>
				<h4 style='color:brown'>";
					echo "Final Price: $".$price;
					echo "</h4>";
					}
					?>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Product</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						
						<tbody>
							<?php
							echo "<tr class='rem1'>";
								include_once("db.php");
								$owner=$_SESSION['username'];
								$sql="SELECT * from checkout where owner='$owner'";
								$result=mysqli_query($db,$sql);
								while($row=mysqli_fetch_array($result)){
									$id=$row['id'];
									echo "<td class='invert-image'>";
									echo	"<img src='item/".$row['productimage']."' width='100px' height='100px'/>";
									echo	"</a>";
									echo "</td>";
									echo "<td class='invert'>".$row['productname']."</td>";
									echo "<td class='invert'>$".$row['price']."</td>";
							echo	"<td class='invert'>";
							echo "<form action='deleteitem.php?id=$id' method='post'>";
		echo "<button class='submit check_out biditem' type='submit' name='submit'>delete</button>";
		echo	"</form>";
							echo 	"</td>";
							echo "</tr>";
									}
								?>
						</tbody>
						
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Payment and Delivery</h4>
					<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="text" name="name" placeholder="Full Name" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="text" name="name" placeholder="Card Number" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="text" name="name" placeholder="Security Number" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Mobile Number" name="number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Address 1" name="landmark" required="">
											</div>
										</div>
										<div class="clear"> </div>
									</div>
									<div class="controls">
										<input type="text" placeholder="Address 2 (option)" name="city">
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="checkout-right-basket">
						
						<a onclick="myFunction()">Make a Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
						<script>
							function myFunction(){
							if(confirm('Thank you for shopping at e-Auction!')){document.location.href='index.php'};
							}</script>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->
	<!-- newsletter -->	<!-- //newsletter -->
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer first section -->
			<p class="footer-main">
	    <p class="footer-main"> <span>"Database Daredevils"</span> is an e-Auction commerce company which aims to provide customers with the unmatched opportunities of online auction along with the regular trade opportunities.</p>
			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Track Your Order</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Free & Easy Returns</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-times" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Online cancellation </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> 123 Sebastian, USA.</li>
							<li>
								<i class="fa fa-mobile"></i> 333 222 3333 </li>
							<li>
								<i class="fa fa-phone"></i> +222 11 4444 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:example@mail.com"> mail@example.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="agileits_app-devices">
						<h5>Download the App</h5>
						<a href="#">
							<img src="images/1.png" alt="">
						</a>
						<a href="#">
							<img src="images/2.png" alt="">
						</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			<div class="agile-sometext">
				<!-- brands -->
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu">
					<h5>Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>Copyright &copy; 2018.Database Daredevil All rights reserved.</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//quantity-->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>