<form action="categories.php" method="post" aria-labelledby="edit categories" class="form">
	<div class="form-group">
		<label aria-labelledby="edit category" for="cat_title">Update Category</label>
		<?php
		if(isset($_GET['edit'])) {
			$cat_id = $_GET['edit'];
			$query = "SELECT * FROM cms.categories WHERE cms.categories.cat_id = '{$cat_id}' ";
			$select_categories_id = mysqli_query($dbConnection, $query);

			while($row = mysqli_fetch_assoc($select_categories_id)) {
				$cat_id = $row['cat_title'];
				$cat_title = $row['cat_title'];
				?>

				<input value="<?php if(isset($cat_title)) { echo $cat_title; } ?>" type="text" name="cat_title" aria-labelledby="update category" title="update cat_title" class="form-control">
			<?php }
		} ?>

		<?php
		// update query
		if (isset($_POST['update_category'])) {
			$the_cat_title = $_POST['cat_title'];
			$query = "UPDATE cms.categories SET cms.categories.cat_title = '{$the_cat_title}' WHERE cms.categories.cat_id = {$cat_id}";
			$update_query = mysqli_query($dbConnection, $query);
			if(!$update_query) {
				die("QUERY FAILED". mysqli_error($dbConnection));
			}
		}
		?>
	</div>
	<div class="form-group">
		<input type="submit" name="update_category" aria-labelledby="submit" value="Update Category" class="btn btn-primary">
	</div>
</form>
