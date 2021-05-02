<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Comuni
	</title>
</head>
<body>
	<link rel="stylesheet" href="dist/index.css">
	<script type="text/javascript" src="dist/libs.min.js"></script>
	<script type="text/javascript" src="dist/index.bundle.js"></script>



	<?php include("header.php")?>

	<div class="background-color-white ">
		<h1 class="font-size-2 font-color-1 font-bold font-family-1 mt-3 text-left text-right text-center">Comuni</h1>
	</div>
	<?php 	include('line.php'); ?>

	<div class="container-fluid font-size-3 border-color-1" style="<?php echo $mt_table;echo $mb_table;echo $tab_width; ?>"  ><!--Apertura container print-->
		<div class="row font-size-3 font-bold">
			<div class="col-4">
				 ID Comune
				 </div>
				 <div class='col-4'>
				 Comune
				 </div>
				<div class='col-4'>
				Provincia
				</div>
		</div>

		<?php
				$sql = "SELECT * FROM `comuni` WHERE `valid`=1 ";
				$result = $db->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					$i=0;
					while($row = $result->fetch_assoc()){
							if ($i%2==0) {
								$bg="background-color-1";
								$txt="font-color-2";
							}
							else {
								$bg="background-color-2";
								$txt="font-color-1";
							}
						echo "<div class='row $txt $bg'>";

									echo "<div class='col-4'>";
									echo ($row['ID_Comune']);
									echo "</div>";

									echo "<div class='col-4'>";
									echo ($row['NomeComune']);
									echo "</div>";

									echo "<div class='col-4'>";
									echo ($row['Provincia']."<br>");
									echo "</div>";
							echo "</div>";
							$i++;

					}
				} else {
					echo "Tabella vuota";
				}
				$db->close();
		 ?>
	 </div> <!--Chiiusura container print-->

		<script>
			var element = document.getElementById("pag3");
			element.classList.add("selected-page");
		</script>

		<?php include('footer.php'); ?>


</body>
</html>
