<?	
include('conf.php');
$login= $_POST['login'];
$password= $_POST['password'];
$mail= $_POST['mail'];


if($login=="" || $password=="" || $mail=="")
    {
    echo '<script language=javascript> alert ("Vous avez oublié de remplir un champs");</script>';
    echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="inscription.php" </SCRIPT>';
exit;
    }
$sql = "SELECT login FROM membres_tbl WHERE login='$_POST[login]'";
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

$data = mysql_fetch_array($req);

if($data['login']==$login)
        {
		echo '<script language=javascript> alert ("Votre pseudo est déja pris");</script>';
		echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="inscription.php"
</SCRIPT>';
exit;
        }
$sql = "SELECT mail FROM membres_tbl WHERE mail='$_POST[mail]'";
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

$data = mysql_fetch_array($req);

if($data['mail']==$mail)
        {
		echo '<script language=javascript> alert ("Cette adresse e-mail à déjà été inscrite !");</script>';
		echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="inscription.php"
</SCRIPT>';
exit;
}
else
 {
$requete=mysql_query("INSERT INTO membres_tbl VALUES('','$_POST[login]','$_POST[password]','$_POST[mail]')");
echo '  <p>Votre login &agrave; &eacute;t&eacute; ajout&eacute; &agrave; ma base de 
    donn&eacute;es, <a href="connect.php">cliquez ici</a> pour vous connecter.</p>
  ';
	}
?>