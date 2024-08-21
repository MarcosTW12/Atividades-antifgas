<?php
 include("conexao.php");
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos Cadastrados</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
  
    $sql= "SELECT id, nomeCargo, salarioCargo FROM cargo";

    $resultado = mysqli_query($conexao, $sql);

   if(mysqli_num_rows($resultado)){
    echo"<table><tr><th>Id</th>
    <th>Nome do Cargo</th><th>Salario do Cargo</th><tr>";
    while($row=mysqli_fetch_assoc($resultado)){
    echo"<tr><td>".$row["id"]."</td><td>".
    $row["nomeCargo"]."</td><td>".
    $row["salarioCargo"]."</td></tr>";
   } 
    echo"</table>";
}
   else{
    echo"Zero Resultados";
   }
   mysqli_close($conexao);
?>
<br>
<p><a href= "cadastroCargo.html">Página de Cadastro de Cargo</a>
</body>
</html>
