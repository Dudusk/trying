<?
session_start();

if(!isset($_SESSION['login'])) {
  echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="connect.php" </SCRIPT>';
  exit;
}
?>
<?php echo '<p>Bonjour ',$_SESSION['login'],'</p>';
?>
<a href="connect.php?action=deconnexion">Déconnexion</a>