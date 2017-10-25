<?
require("conf.php");

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
  extract($_POST);
  // on recupère le password de la table qui correspond au login du visiteur
  $sql = "select password from membres_tbl where login='".$login."'";
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $data = mysql_fetch_assoc($req);

  if($data['password'] != $password) {
        echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="connect.php" </SCRIPT>';
    exit;
  }
  else {
    session_start();
    $_SESSION['login'] = $login;
    
    echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="membres.php" </SCRIPT>'; 
  }    
}
else {
   echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="connect.php" </SCRIPT>';
   exit;
}
?>