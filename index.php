<!DOCTYPE html>
<html>
<head>
	<title>
		Home
	</title>
<style media="screen">
.text-left {
	text-align: left;
}

.text-right {
	text-align: right;
}

.text-center {
	text-align: center;
}
</style>
</head>
<body>

	<link rel="stylesheet" href="dist/index.css">
	<script type="text/javascript" src="dist/libs.min.js"></script>
	<script type="text/javascript" src="dist/index.bundle.js"></script>

	<?php include("header.php")?>

	<div class="background-color-white ">
		<h1 class="font-size-2 font-color-1 font-bold font-family-1 mt-3 text-left text-right text-center">Home</h1>
	</div>
</div>
<?php 	include('line.php'); ?>




	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class="col-xs-12 col-md-6">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>


		<script>
			var element = document.getElementById("home");
			element.classList.add("selected-page");
		</script>
		<?php include('footer.php'); ?>

</body>
</html>
