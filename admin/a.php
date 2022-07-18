
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Admin| Insert Product</title>
	
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	<script>

		function getSubcat(val) 
		{
			$.ajax({
			type: "POST",
			url: "get_subcat.php",
			data:'cat_id='+val,
			success: function(data)
			{
				$("#subcategory").html(data);
			}
			});
		}

		function selectCountry(val) 
		{
			$("#search-box").val(val);
			$("#suggesstion-box").hide();
		}
	</script>	
</head>

<body>

	<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<?php include('include/sidebar.php');?>
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Insert Product</h3>
							</div>
						<div class="module-body">
							<?php if(isset($_POST['submit']))

							{?>																									
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
								</div>
							<?php } ?>

							<?php if(isset($_GET['del']))

							{?>
								<div class="alert alert-error">									
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
								</div>
							<?php } ?>

						<br />

<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

	<div class="control-group">
	<label class="control-label" for="basicinput">Category</label>
	<div class="controls">
		<select name="category" class="span8 tip" onChange="getSubcat(this.value);"  required>
			<option value="">Select Category</option>

			<?php $query=mysqli_query($con,"select * from category");
			while($row=mysqli_fetch_array($query))
				{?>
					<option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
				<?php } ?>

		</select>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Sub Category</label>
	<div class="controls">
		<select name="subcategory" id="subcategory" class="span8 tip" required></select>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Name</label>
	<div class="controls">
		<input type="text" name="productName" placeholder="Enter Product Name" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Company</label>
	<div class="controls">
		<input type="text" name="productCompany"  placeholder="Enter Product Comapny Name" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Price Before Discount</label>
	<div class="controls">
		<input type="text" name="productpricebd"  placeholder="Enter Product Price" class="span8 tip" required>
    </div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Price After Discount(Selling Price)</label>
	<div class="controls">
		<input type="text" name="productprice"  placeholder="Enter Product Price" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Description</label>
	<div class="controls">
		<textarea name="productDescription" placeholder="Enter Product Description" rows="6" class="span8 tip">
		</textarea>  
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Shipping Charge</label>
	<div class="controls">
		<input type="text" name="productShippingcharge"  placeholder="Enter Product Shipping Charge" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Availability</label>
	<div class="controls">
		<select   name="productAvailability"  id="productAvailability" class="span8 tip" required>
			<option value="">Select</option>
			<option value="In Stock">In Stock</option>
			<option value="Out of Stock">Out of Stock</option>
		</select>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Image1</label>
	<div class="controls">
		<input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Image2</label>
	<div class="controls">
		<input type="file" name="productimage2"  class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="basicinput">Product Image3</label>
	<div class="controls">
		<input type="file" name="productimage3"  class="span8 tip">
	</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<button type="submit" name="submit" class="btn">Insert</button>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>