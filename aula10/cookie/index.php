<h1>INDEX.PHP</h1>
<?php
session_start(); // Inicializando uma sessão
$nome = "Informatica";
echo $nome . "<br>";

$_SESSION['nome'] = "tecnologia";

echo $_SESSION['nome'] . "<br>";

$cookie_name = "user";
$cookie_value = "John Doe";

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

echo "<br";
foreach ($_COOKIE as $k => $v) {
    echo $k . " " . $v . "<br>";
}

?>
<a href="index2.php">INDEX 2</a>