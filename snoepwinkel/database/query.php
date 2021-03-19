<?php

define("HOST", "localhost");
define("DBNAME", "snoepwinkel");
define("USER", "root");
define("PASS", "");

function getDbConnection(){
    try {
        $con = new PDO('mysql:host='.HOST.';charset=utf8;dbname='.DBNAME, USER, PASS);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    return $con;
}

function getProduct($con){
    $datas = array();
    $query = $con->prepare("SELECT * FROM snoep");
    $query->execute();

    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $datas[] = $row;
    }
    return $datas;
}
function getSpecificProduct($con, $item){
    $datas = array();
    $query = $con->prepare("SELECT * FROM snoep WHERE id='$item'");
    $query->execute();

    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $datas[] = $row;
    }
    return $datas;
}


?>