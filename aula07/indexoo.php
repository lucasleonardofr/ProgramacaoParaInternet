<html>

<head>

</head>

<body>
    <?php
    //mysqli (object oriented, procedural.mysql only)


    echo "<h1>PHP com MySQL </h1>";
    //mysqli (object oriented, procedural.mysql only)

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "empresax";

    //abrindo a conexão
    $conn2 = new mysqli($servidor, $usuario, $senha, $bd);

    //testando a conexão 
    if ($conn2->connect_error) {
        die("Conexão não realizada!" . $conn->connect_error);
    } else {
        echo"<p>Conexão realizada com sucesso!</p>";
    }
    //fechando a conexão
    $conn2->close();

    ?>
</body>

</html>