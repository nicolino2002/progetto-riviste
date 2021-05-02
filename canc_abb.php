<?php
      include('config.php');
      unset($_SESSION['new_abb_message']);
      $id=$_POST['id_abb'];
      echo $id;
      $id=$id+0;
      $sql="UPDATE `abbonati` SET `valid` = 0 WHERE `abbonati`.`ID_Abbonato` = $id";
        if ($db->query($sql) === TRUE) {
          $_SESSION['canc_abb_message']="allow";

        } else {
          $_SESSION['canc_abb_message']="deny";
        }
        header('location: pag1.php');

        $db->close();

 ?>
