<?php

try{

$base = new PDO("mysql:host=localhost","root","");
echo "conexion ok";

}catch(Exception $e){

echo $e->getMessage();

}