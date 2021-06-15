<?php

function getError(){
$serv=strip_tags($_GET["serveur"]);
$languages=strip_tags($_GET["langage"]);
  if(( $serv==$_SERVER["HTTP_HOST"])&& isset($_GET["langage"])){
    return" langage :".$languages."serveur: ".$serv;//d'abord on cree une fonction simple
  }else if (empty($_GET["langage"])){
    echo"erreur pas de langages séléctionné";
  }else{
    echo "erreur";
  }
}
  echo getError();

?>
