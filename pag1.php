<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Abbonati
	</title>
</head>
<body>
	<link rel="stylesheet" href="dist/index.css">
	<script type="text/javascript" src="dist/libs.min.js"></script>
	<script type="text/javascript" src="dist/index.bundle.js"></script>

	<?php include("header.php")?>

	<div class="background-color-white ">
		<h1 class="font-size-2 font-color-1 font-bold font-family-1 mt-3 text-left text-right text-center">Abbonati</h1>
	</div>


	<?php 	include('line.php');?>

	 <div class="container-fluid font-size-3 border-color-1" style="<?php echo $mt_table;echo $mb_table;echo $tab_width; ?>" ><!--Apertura container print-->
		 <?php
			 if (isset($_SESSION['new_abb_message'])) {
				 if ($_SESSION['new_abb_message']=="allow") {
					 echo ('<div class="container font-size-4 mt-5 ">
							 <div class="alert alert-success" role="alert">
							 Aggiunta abbonato riuscita
							 </div>
						 </div>');
				 }
				 else {
					 echo ('<div class="container font-size-4 mt-5">
							 <div class="alert alert-danger" role="alert">
							 Aggiunta abbonato fallita
							 </div>
						 </div>');				 }


				 unset($_SESSION['new_abb_message']);
			 }
			 ?>

		 <form class="padding-0 margin-0 border-0" action="new_abbonato.php" method="post">

			 <div class="row">
				 <div class="col-12">
					 <div class="background-color-white">
						 <h1 class="font-size-3 font-color-1 font-bold font-family-1 mt-3 text-left text-right text-center">Aggiungi abbonato</h1>
					 </div>
				 </div>
			 </div>

		 	<div class="row margin-0 mb-4 border-0">
				<div class="col-xl-4 col-lg-6 col-sm-12 field-mt">
					<input type="text" name="nome" value="" class="w-75 form-control-lg" placeholder="Nome" required>
				</div>
				<div class="col-xl-4 col-lg-6 col-sm-12 field-mt">
					<input type="text" name="cognome" value="" class="w-75 form-control-lg" placeholder="Cognome" required>
				</div>
			 </div>

			 <div class="row margin-0 mb-4 border-0">
				 <div class="col-xl-4 col-lg-6 col-sm-12 field-mt">
					<select name="tipovia" class="form-control-lg w-75" placeholder="TipoVia" required>
						<option value="Via">Via</option>
						<option value="Viale">Viale</option>
						<option value="Corso">Corso</option>
						<option value="Piazza">Piazza</option>
					</select>
				</div>
				 <div class="col-xl-4 col-lg-6 col-sm-12 field-mt" >
					 <input type="text" name="nomevia"  class="form-control-lg w-75" placeholder="Nome Via" required>
				 </div>
				 <div class="col-xl-4 col-lg-6 col-sm-12 field-mt">
					 <input type="text" name="civico" class="form-control-lg w-75" placeholder="Civico" required>
				 </div>
			 </div>

			 <div class="row margin-0 mb-4 border-0 ">
						 <div class="col-xl-4 col-lg-6 col-sm-12 field-mt">
							 <select name="comune" class="form-control-lg w-75" required>
							 			 <?php
										 $sql = "SELECT NomeComune,ID_Comune from comuni ORDER BY NomeComune";
										 $result = $db->query($sql);

										 if ($result->num_rows > 0) {

											 while($row= $result->fetch_assoc()){

												 echo "<option value='$row[ID_Comune]'>$row[NomeComune]</option>";
																					 }
										 } else {echo "Tabella vuota";}
									?>
							</select>
					 	</div>
				 		<div class="col-xl-4 col-lg-6 col-sm-12 field-mt">
					 		<input type="text" name="email" placeholder="Email" class="form-control-lg w-75">
					 	</div>
	 			</div>

				<div class="row margin-0 mb-4 border-0">
						<div class="col-xl-4 offset-xl-8 col-lg-4 offset-lg-8 col-sm-12">
								<button type="submit" id="submit" class="btn btn-1" >Aggiungi</button>
							</div>
					</div>

		</form>

	</div> <!--Chiiusura container print-->
</div>

			<div class="container-fluid font-size-3 border-color-1 padding-1" style="<?php echo $mt_table;echo $mb_table;echo $tab_width; ?>" ><!--Apertura container print-->
				<div class="row">
					<div class="col-12">
						<div class="background-color-white ">
							<h1 class="font-size-3 font-color-1 font-bold font-family-1 mt-3 text-left text-right text-center">Elenco abbonati</h1>
						</div>
					</div>
				</div>
			<?php
						$sql = "SELECT A.`Nome` ,A.`ID_Abbonato` , A.`Cognome` , A.`TipoVia` , A.`NomeVia`,A.`Civico`, A.`Email` , A.`Cognome`,A.`valid`, B.NomeComune,B.Provincia FROM abbonati A, comuni B WHERE A.ID_Comune=B.ID_Comune AND A.valid=1";
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
																echo "<form method='post' action='canc_abb.php'>";
																echo ($row['ID_Abbonato']);
																echo "</div>";
																echo "<div class='col-1'>";
																echo "<button class='btn-2' type='submit' name='id_abb' value='$row[ID_Abbonato]'>
																<i type='submit'  name='id_abb' value='$row[ID_Abbonato]' class='fa fa-trash $txt' ></i></button>";
																echo "</form>";
														echo "</div>";
									echo "</div>";

										echo "<hr>";
										echo "<div class='row'>";
										echo "<div class='col-7 offset-1  padding-0' >";
										echo ('Nome Completo');
										echo "<br>";
										echo "</div>";
										echo "<div class='col-3 padding-0' >";
										echo ($row['Nome']." ".$row['Cognome']);
										echo "</div>";
										echo "</div>";

											echo "<hr>";
											echo "<div class='row'>";
											echo "<div class='col-7 offset-1  padding-0' >";
											echo ('Residenza');
											echo "<br>";
											echo "</div>";
											echo "<div class='col-3 padding-0' >";
											echo ($row['TipoVia']." ".$row['NomeVia']." ".$row['Civico']);
											echo "</div>";
											echo "</div>";

												echo "<hr>";
												echo "<div class='row'>";
												echo "<div class='col-7 offset-1  padding-0' >";
												echo ('Email');
												echo "<br>";
												echo "</div>";
												echo "<div class='col-3 padding-0' >";
												echo ($row['Email']."<br>");
												echo "</div>";
												echo "</div>";

												  echo "<hr>";
													echo "<div class='row'>";
													echo "<div class='col-7 offset-1  padding-0' >";
													echo ('Comune');
													echo "<br>";
													echo "</div>";
													echo "<div class='col-3 padding-0' >";
													echo ($row['NomeComune']." [".$row['Provincia']."]<br>");
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
			var element = document.getElementById("pag1");
			element.classList.add("selected-page");
		</script>




		<?php include('footer.php'); ?>

</body>
</html>
