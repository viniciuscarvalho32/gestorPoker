<?php
session_start();
include("classes/conexao.php");

$email = $_SESSION['email'];
$nome='';
$result = @mysql_query("SELECT * FROM jogador where email='$email'");
if(!$result) {
    echo "Não foi possível executar a consulta";
} else {
    $row = @mysql_fetch_assoc($result, MYSQL_ASSOC);
    $idjog = $row['id'];
    $apelido = $row['apelido'];
    $tipusu = $row['tipusu'];
    $arrayfoto = array("1"=>1,2,3,4,5,6);
}
?>