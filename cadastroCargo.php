<?php
 include("conexao.php");
 $nomeCargo = $_POST ["nomeCargo"];
 $salarioCargo = $_POST ["salarioCargo"];

 $sql="INSERT INTO cargo (nomeCargo, salarioCargo ) VALUES
 ('$nomeCargo','$salarioCargo' )";

 if(mysqli_query($conexao, $sql)) {
 echo "<h1>Cargo cadastrado!</h1>";
 }
 else {
 echo "Error: ".$sql."<br>".mysqli_error($conexao);
 }
 mysqli_close($conexao);
?>