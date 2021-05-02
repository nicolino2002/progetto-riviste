<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
Riviste
	</title>
</head>
<body>
	<link rel="stylesheet" href="dist/index.css">
	<script type="text/javascript" src="dist/libs.min.js"></script>
	<script type="text/javascript" src="dist/index.bundle.js"></script>



	<?php include("header.php")?>

	<div class="background-color-white ">
		<h1 class="font-size-2 font-color-1 font-bold font-family-1 mt-3 text-left text-right text-center">Riviste</h1>
	</div>
	<?php 	include('line.php'); ?>

	<div class="container-fluid font-size-3 border-color-1 padding-1" style="<?php echo $mt_table;echo $mb_table;echo $tab_width; ?>" ><!--Apertura container print-->
		<div class="row">
			<div class="col-12">
				<div class="background-color-white ">
					<h1 class="font-size-3 font-color-1 font-bold font-family-1 mt-3 text-left text-right text-center">Elenco riviste</h1>
				</div>
			</div>
		</div>
		<?php
					$sql = "SELECT * FROM `riviste`";
					$result = $db->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						$i=1;
						while($row = $result->fetch_assoc()){
								if ($i%2==0) {
									$bg="background-color-1";
									$txt="font-color-2";
								}
								else {
									$bg="background-color-2";
									$txt="font-color-1";
								}


										echo "<div class='row $bg $txt'>";
										echo "<div class='col-7 offset-1 padding-0' >";
										echo ('ID');
										echo "<br>";
										echo "</div>";
										echo "<div class='col-3 padding-0' >";
										echo ($row['ID_Rivista']);
										echo "<form method='post' action='canc_abb.php'>";
										echo "<button type='submit' name='id_riv' value='$row[ID_Rivista]'> Cancella </button>";
										echo "</form>";
										echo "</div>";
										echo "</div>";

										echo "<hr>";
										echo "<div class='row'>";
										echo "<div class='col-7 offset-1  padding-0' >";
										echo ('Titolo');
										echo "<br>";
										echo "</div>";
										echo "<div class='col-3 padding-0' >";
										echo ($row['Titolo']."<br>");
										echo "</div>";
										echo "</div>";

										echo "<hr>";
										echo "<div class='row'>";
										echo "<div class='col-7 offset-1  padding-0' >";
										echo ('Prezzo');
										echo "<br>";
										echo "</div>";
										echo "<div class='col-3 padding-0' >";
										echo ($row['Prezzo']."€<br>");
										echo "</div>";
										echo "</div>";

										echo "<hr>";
										echo "<div class='row'>";
										echo "<div class='col-7 offset-1  padding-0' >";
										echo ('Periodicità');
										echo "<br>";
										echo "</div>";
										echo "<div class='col-3 padding-0' >";
										echo ($row['Periodicita']."<br>");
										echo "</div>";
										echo "</div>";
										echo "<br>";


								$i++;
						}
					} else {
						echo "Tabella vuota";
					}
					$db->close();
			 ?>
		 </div> <!--Chiiusura container print-->

		<script>
			var element = document.getElementById("pag2");
			element.classList.add("selected-page");
		</script>

		<?php include('footer.php'); ?>


</body>
</html>
