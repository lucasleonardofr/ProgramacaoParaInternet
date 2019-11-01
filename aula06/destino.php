<!DOCTYPE html>
<html>
<head>
<style type=”text/css”>
tr.par{background-color:#CCCCCC;}
tr.impar{background-color:#FAFAFA;}
table{border-collapse:collapse;}
</style>
</head>
<body>
    <?php
    echo "<p>Olá, mundo!</p>";
    //Variáveis em PHP
    //Toda variável em PHP começa um cifrão $GLOBALS
    $nome = "Lucas Leonardo";
    $idade = 21;

    echo"<p>$nome</p>";
    if($idade > 18){
        echo"<p>Maior de idade</p>";
    }else{
        echo"<p>Menor de idade.</p>";
    }
    for($i = 0; $i<10; $i++){
       
       // echo"<p>$i x 2=" . $i*2 . "</p>";
       $num = rand(0,100);
       echo"<p>$num</p>";
    }
?>
<p><?php echo "Boa tarde!";?></p>


</body>
</html>