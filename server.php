<?php
$serv=$_GET["serveur"];

function getError($serv){
  if( $serv==$_SERVER["HTTP_HOST"]){
    return" langage :".$_GET["langage"]."serveur: ".$serv;//d'abord on cree une fonction simple
  }else{
    echo"erreur";
  }
}
  echo getError($serv);
 
?>
