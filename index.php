<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-php5</title>
</head>
<body>

<h3 style="color:red;">Exercice 1:</h3>

<a href="index.php?nom=Berrichi&prenom=Faiza">lien</a>
<?php
echo " nom :".$_GET["nom"]." prénom : ".$_GET["prenom"];
?>

<h3 style="color:red;">Exercice 2:</h3>
<?php
$newPage=fopen("target.php","a+");
fclose($newPage);
?>
<a href="target.php?nom=Berrichi&prenom=Faiza&age=34">lien</a>

<h3 style="color:red;">Exercice 3:</h3>
<?php
$newPage1=fopen("condition.php","a+");
fclose($newPage1);
?>

<a href="condition.php?nom=Berrichi&prenom=Faiza&age=AA">lien</a>


<h3 style="color:red;">Exercice 4:</h3>
<?php
$newPage2=fopen("server.php","a+");
fclose($newPage2);
?>

<a href="server.php?langage=PHP&serveur=<?php
 echo $_SERVER["HTTP_HOST"]
?>">
lien</a>

<h3 style="color:red;">Exercice 5:</h3>
<?php
$newPage3=fopen("server1.php","a+");
fclose($newPage3);
?>

<a href="server1.php?langage=PHP&serveur=<?php
 echo $_SERVER["HTTP_HOST"]
?>">
lien</a>

<h3 style="color:red;">Exercice 6:</h3>
<?php
$newPage4=fopen("server2.php","a+");
fclose($newPage4);
?>

<a href="server2.php?langage=<?php
$var=strip_tags("PHP");
htmlspecialchars($var);
echo $var;
?>&serveur=<?php
 echo $_SERVER["HTTP_HOST"]
?>">
lien</a>

</body>
</html>