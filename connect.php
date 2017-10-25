<?php
if($action=="deconnexion"){

session_start();


$_SESSION = array();


session_destroy();

}
?> 

<form action="connect2.php" method='post'>
          <table align="left" border="0" class="text1">
            <tr>
    <td>Login :</td>
    <td><input type="text" name="login"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value="Connexion"></td>
  </tr>
</table>
</form></p>
<?php include("bodybas.php"); ?>