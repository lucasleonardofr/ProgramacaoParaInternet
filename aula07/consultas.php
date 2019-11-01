<html>

<head>

</head>

<body>
    <?php
    //mysqli (object oriented, procedural.mysql only)
    //PDO()

    echo "<h1>Consultas com mySql </h1>";
    include "index.php";

    $sql = "select * from departamento";
    //leva primeiro a conexão e depois a consulta
    $resultados = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultados) > 0) {
        //extraindo linha por linha dos resultados
        //dentro do while usa-se um array associativo
        while ($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)) {
            echo "<p>" ." | ". $linha[0] ." | ". $linha[1] ." | ". $linha[2] ." | ". $linha[3] . "</p>";
        }
    } else {
        echo "<p>Zero resultados!</p>";
    }

    mysqli_close($conn)
    ?>
</body>

</html>