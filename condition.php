<?php

$age= $_GET["age"];
if (($age>18)&&($age<130)){

echo " nom :".$_GET["nom"]." prénom : ".$_GET["prenom"]." age : ".intval($age);
}else{
    echo " erreur";
}

?>