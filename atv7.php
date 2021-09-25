<?php    
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $arr["nome"] = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
        $arr["altura"] = filter_input(INPUT_POST,'altura',FILTER_SANITIZE_SPECIAL_CHARS);
        $arr["peso"] = filter_input(INPUT_POST,'peso',FILTER_SANITIZE_SPECIAL_CHARS);

        $imc= $arr["peso"]/($arr["altura"]*$arr["altura"]);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	 	 <title>IMC</title>
</head>
<body>
 <?php
    if(isset($imc)){
        echo "<h3>O imc do usuário ".$arr["nome"]." é de ".$imc ."</h3>";
    }
 ?>
 <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
 Nome: <input type="text" name="nome"><br>
 Altura: <input type="number" name="altura" step=".01"><br>
 Peso: <input type="number" name="peso"><br>
 <input type="submit">
 </form>
</body>
</html>