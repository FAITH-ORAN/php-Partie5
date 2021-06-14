<?php

function getError(){
$serv=$_GET["serveur"];
$languages=strip_tags($_GET["langage"]);
  if(( $serv==$_SERVER["HTTP_HOST"])&& ($languages)){
    return" langage :".$languages."serveur: ".$serv;//d'abord on cree une fonction simple
  }else{
    echo"erreur";
  }
}
  echo getError();

?>