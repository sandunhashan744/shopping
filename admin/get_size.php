<?php
include('include/config.php');

if(!empty($_POST["cat_id"])) 
	{
 		$id=intval($_POST['cat_id']);
		$query=mysqli_query($con,"SELECT * FROM size WHERE subcategory=$id");
	?>

	<option value="">Select Size</option>
		
		<?php
 		while($row=mysqli_fetch_array($query))
 			{
  				?>
  				<option value="<?php echo htmlentities($row['id']); ?>">
  					<?php echo htmlentities($row['size']); ?>
  				</option>
  				<?php
 			}
	}
?>