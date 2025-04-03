<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="post" action="form.php">
    Digite o seu nome:
    <input type="text" size="80" name="txtnome">
    <br><br>
    
    
    Escreva seu endereço:
    <input type="text" size="80" name="txtendereco">
<br><br>

    Digite a sua idade:
    <input type="text" size="80" name="txtidade">
    <br><br>
     
        Seu gênero:
        <br>
    <input type="radio" name="opcao" value="Feminino">Feminino<br>
    <input type="radio" name="opcao" value="Masculino">Masculino<br>
    <input type="radio" name="opcao" value="Prefiro não mencionar">Prefiro não mencionar.<br>
    <br>
    <input type=submit value="Enviar">
</form>

<?php 
    $_txtnome=$_POST["txtnome"];
    echo "Seu nome: $_txtnome <br><br>";
    
    $_txtendereco=$_POST["txtendereco"];
    echo "Seu endereço: $_txtendereco <br><br>";
    
    $_txtidade=$_POST["txtidade"];
    echo "Sua idade: $_txtidade <br><br>";
  
    $_txtgenero=$_POST["opcao"];
    echo "Seu gênero: $_txtgenero <br><br>";

    if ($_txtidade >= 18){
        echo "Você é maior de idade.";
    
    }else{
        echo "Você é menor de idade.";
    }
?>
</body>
</html>