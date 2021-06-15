<?php


$serv=strip_tags($_GET["serveur"]);
$languages=strip_tags($_GET["langage"]);
  if(isset($_GET["langage"]) && isset($_GET["serveur"])){
    echo " langage :".$languages."serveur: ".$serv;//d'abord on cree une fonction simple

  }else{
    echo "erreur";
  }



?>
