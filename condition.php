<?php

$age= $_GET["age"];
if (!is_numeric($age>18)&&($age<130)){

echo " nom :".$_GET["nom"]." prénom : ".$_GET["prenom"]." age : ".$_GET["age"];
}else{
    echo " ";
}

?>