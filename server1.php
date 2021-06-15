<?php

function getError(){
$serv=$_GET["serveur"];
;
  if(isset($_GET["langage"]) && isset($_GET["serveur"])){
    return" langage :".$_GET["langage"]."serveur: ".$serv;//d'abord on cree une fonction simple
  }else{
    echo"erreur";
  }
}
  echo getError();
?>