<?php

  if(($_GET["serveur"])==$_SERVER["HTTP_HOST"]){
    echo " langage :".$_GET["langage"]."serveur: ".$_GET["serveur"];}
  else{
  echo "erreur";}
    
?>
