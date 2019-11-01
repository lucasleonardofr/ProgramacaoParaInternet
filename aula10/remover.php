<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php

    echo "<h1>PHP com MySQL - Remover</h1>";
    include "index.php";
    $codDepto = $_GET['codDepto'];
    echo "<p>Codigo Departamento: " . $codDepto . "</p>";

    $sql = "select * from departamento where codDepto = " . $codDepto;

    $resultados = mysqli_query($conn, $sql);
    echo "<table>";
    echo "<tr>";
    //coletando os nomes dos campos da tabela consultada
    $campos = mysqli_fetch_fields($resultados);
    foreach ($campos as $v) {
        echo "<th>$v->name</th>";
    }
    echo "</tr>";
    echo "<tr>";

    if (mysqli_num_rows($resultados) > 0) {
        //extraindo linha por linha dos resultados
        while ($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)) {
            $codDepto = $linha[0];
            $nome = $linha[1];
            $gerente = $linha[2];
            $dataGerente = $linha[3];
            echo "<td>" . $codDepto . "</td>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $gerente . "</td>";
            echo "<td>" . $dataGerente . "</td>";
        }
    } else {
        echo "<p>Não foram encontrados resultados!</p>";
    }
    echo "</tr>";
    echo "</table>";

    ?>
    <form action="removerregistro.php" method="post">
        <input type="hidden" name="codDepto" value="<?php echo $codDepto; ?>">
        <p><input type="submit" value="Apagar"></p>
    </form>
</body>

</html>
///////////////////////////