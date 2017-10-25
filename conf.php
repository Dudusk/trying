<?
$host="localhost";
$user="root";//nom d'utilisateur
$pass="";//mot de pass
$base="site";//nom de la bases de données
$connect=mysql_connect($host,$user,$pass);
mysql_select_db($base, $connect);
?>