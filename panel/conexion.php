<?php 
$host="localhost";
$db="usuarios";
$user="root";
$pas="";

try{

    $base=new PDO("mysql:host=$host;port=3307;dbname=$db;charset=utf8",$user,$pas);

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

    // $base->exec("SET CHARACTER SET utf8");

}catch(Exception $e){
    die('error:'.$e->getMessage());
    // echo "linea del error:".$e->getLine();

}
?>