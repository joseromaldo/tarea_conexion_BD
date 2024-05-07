<?php
try{
    $conn = new PDO("informix:host=host.docker.internal; service=9088;database=tienda; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix");
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexión";
}catch(PDOException $e){
    echo "No hay conexión de PDO";
    echo "<br>";
    echo $e -> getMessage();
}

