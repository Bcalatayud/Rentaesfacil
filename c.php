<?php
$nombre = $_REQUEST["nombre"];
$busco = isset($_REQUEST["busco"]);
$ofrezco = isset($_REQUEST["ofrezco"]);
$correo = $_REQUEST["correo"];
$texto = $_REQUEST["text"];

$de = "rentaesfacil <root@serverprofi21.com>";
$para = "xxanath@gmail.com";
if($busco){
    $asunto = "Rentaesfacil - Busco rentar";
}else{
    $asunto = "Rentaesfacil - Ofrezco rentar";
}

shell_exec("echo \"Subject: $asunto\n\nNombre: $nombre\nCorreo: $correo\n\n$texto\" | sendmail -f \"$de\" $para");

header("Location: index.php?c=1")
?>
