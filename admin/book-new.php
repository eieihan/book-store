<?php include("confs/auth.php") ?>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<h1>New Book</h1>
<form action="book-add.php" method="post" enctype="multipart/form-data">
	<label for="title">Book Title</label>
	<input type="text" name="title" id="title">

	<label for="author">Book Author</label>
	<input type="text" name="author" id="author">

	<label for="summary">Summary</label>
	<textarea type="text" name="summary" id="summary"></textarea> 

	<label for="price">Price</label>
	<input type="text" name="price" id="price">

	<label for="categories">Category</label>
	<select name="category_id" id="categories">
		<option value="0">--Choose--</option>

		<?php 
			include("confs/config.php");
			$result=mysqli_query($conn,"SELECT id,name FROM categories");
			while($row=mysqli_fetch_assoc($result)): ?>
				 <option value="<?php echo $row['id'] ?>">
		 			<?php echo $row['name'] ?>
		 		</option>
			<?php endwhile; ?>
	</select>
	<label for="cover">Cover</label>
	<input type="file" name="cover" id="cover">
	<br><br>
	<input type="submit" value="Add Book">
	<a href="book-list.php" class="back">Back</a>
</form>
<style type="text/css">
	label{
		display: block;
		margin-top: 8px;
	}
</style>


