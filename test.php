 <?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_GET['action']) && $_GET['action']=="add")
	{
		$id=intval($_GET['id']);

		if(isset($_SESSION['cart'][$id]))
			{
				$_SESSION['cart'][$id]['quantity']++;
			}
		else
			{
				$sql_p="SELECT * FROM products WHERE id={$id}";
				$query_p=mysqli_query($con,$sql_p);
		
			if(mysqli_num_rows($query_p)!=0)
				{
					$row_p=mysqli_fetch_array($query_p);
					$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
					header('location:index.php');
				}
			else
				{
					$message="Product ID is invalid";
				}
			}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
	    <title>Elegent Clothing Home Page</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">

		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">

		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
	

	</head>

    <body class="cnt-home">
	
<!-- ======================================= HEADER ========================================= -->

<header class="header-style-1">

	<?php include('includes/top-header.php');?>
	<?php include('includes/main-header.php');?>
	<?php include('includes/menu-bar.php');?>
</header>

<!-- ===================================== HEADER : END ==================================== -->



<!-- ==================================== TOP NAVIGATION =================================== -->	
<!-- ================================= TOP NAVIGATION : END ================================ -->
					

<!-- ==================================== SECTION – HERO ==================================== -->
			
<div id="hero" class="homepage-slider3">
	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
		<div class="full-width-slider">	
			<div class="item" style="background-image: url(assets/images/sliders/sider3.png);">
				<!-- /.container-fluid -->
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->
	    
	    <div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(assets/images/sliders/sider4.png);">
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->

	</div><!-- /.owl-carousel -->
</div>
			
<!-- ============================== SECTION – HERO : END ==================================== -->	
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
<!-- ===================================== INFO BOXES ======================================= -->

<div class="info-boxes wow fadeInUp">
	<div class="info-boxes-inner">
		<div class="row">
			<div class="testone">
			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
						     <i class="icon fa fa-money"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading green">Money Back</h4>
						</div>
					</div>	
					<h6 class="text">30 Day Money Back Guarantee.</h6>
				</div>
			</div><!-- .col -->

			<div class="hidden-md col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-truck"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading orange">FREE SHIPPING</h4>
						</div>
					</div>
					<h6 class="text">Delivary over Rs.50000.00</h6>	
				</div>
			</div><!-- .col -->

			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-clock-o"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading red">ON TIME DELIVARY</h4>
						</div>
					</div>
					<h6 class="text">You have a good service</h6>	
				</div>
			</div><!-- .col -->
		</div>
		</div><!-- /.row -->
	</div><!-- /.info-boxes-inner -->	
</div><!-- /.info-boxes -->

<!-- ============================== INFO BOXES : END ========================================= -->		
</div><!-- /.homebanner-holder -->			
</div><!-- /.row -->

<!-- ======================================================================================== -->
<!-- ----------------------------------- HOT NEWS ------------------------------------------ -->
<!-- ======================================================================================== -->
<!--
<section class="section featured-product inner-xs wow fadeInUp">
	<h3 class="section-title">Best Deal</h3>
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
			<?php
$ret = mysqli_query($con,"select * from products where category=1");
$num = mysqli_num_rows($ret);

if($num>0)
{
	while ($row=mysqli_fetch_array($ret)) 
		{
			?>		
	<div class="item item-carousel">
		<div class="products">
				
	<div class="product">		
		<div class="product-image">

			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="200" height="220" alt="">
				</a>
			</div>		
		</div>
			
		<div class="product-info text-left">
			
			<h3 class="name">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
					<?php echo htmlentities($row['productName']);?>
				</a>
			</h3>

			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">
				<span class="price-before-discount">Rs. <?php echo htmlentities($row['productPriceBeforeDiscount']);?>		
				</span>
				<br>
				<span class="price">
					Rs.<?php echo htmlentities($row['productPrice']);?>
				</span>										
			</div>

		</div>

		<div class="action">
			<a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a>
		</div>
	</div>
      
	</div>
</div>
	  <?php } }

	  else
	  	{?>-->
<!-- ================================================================================ -->
<div class="row">
	<div class="col-lg-8">
         <img src="ssets/images/sliders/sider3.png" alt="">
     </div>
</div>
<!-- ================================================================================ -->
		<?php } ?>
</div>
</section>
<!-- ================================================================================= -->
<!-- ----------------------------------- HOT NEWS ------------------------------------ -->
<!-- ================================================================================= -->

<!-- =================================================================================== -->
<!-- --------------------------------~~~ Trouser ~~~------------------------------------ -->
<!-- =================================================================================== -->

<section class="section featured-product inner-xs wow fadeInUp">
	<h3 class="section-title">Trouser</h3>
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
			<?php
$ret=mysqli_query($con,"select * from products where category=7");
while ($row=mysqli_fetch_array($ret)) 
{
?>				    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="200" height="220" alt=""></a>
			</div>		
		</div>
			
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs.<?php echo htmlentities($row['productPrice']);?>				
				</span>
														
			</div>
		</div>
				
			</div>
      
			</div>
		</div>
	<?php } ?>
	</div>
</section>


<!-- --------------------------------~~~ Shorts ~~~------------------------------------ -->
<!-- =================================================================================== -->

<section class="section featured-product inner-xs wow fadeInUp">
	<h3 class="section-title">Shorts</h3>
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
			<?php
$ret=mysqli_query($con,"select * from products where category=8");
while ($row=mysqli_fetch_array($ret)) 
{
?>				    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="200" height="220" alt=""></a>
			</div>		
		</div>
			
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs.<?php echo htmlentities($row['productPrice']);?>				
				</span>
														
			</div>
		</div>
				
			</div>
      
			</div>
		</div>
	<?php } ?>
	</div>
</section>
<!-- --------------------------------~~~ Shirts ~~~------------------------------------ -->
<!-- =================================================================================== -->

<section class="section featured-product inner-xs wow fadeInUp">
	<h3 class="section-title">Shirts</h3>
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
			<?php
$ret=mysqli_query($con,"select * from products where category=9");
while ($row=mysqli_fetch_array($ret)) 
{
?>				    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="200" height="220" alt=""></a>
			</div>		
		</div>
			
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs.<?php echo htmlentities($row['productPrice']);?>				
				</span>
														
			</div>
		</div>
				
			</div>
      
			</div>
		</div>
	<?php } ?>
	</div>
</section>


</div>
</div>
</div>

<!-- =========================================== END ============================================= -->

<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>


</body>
</html>