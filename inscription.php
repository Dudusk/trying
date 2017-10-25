<SCRIPT LANGUAGE="JavaScript">
function VerifForm(formulaire)
	{
	adresse = formulaire.mail.value;
	var place = adresse.indexOf("@",1);
	var point = adresse.indexOf(".",place+1);
	if ((place > -1)&&(adresse.length >2)&&(point > 1))
		{
		formulaire.submit();
		return(true);
		}
	else
		{
		alert('Entrez une adresse e-mail valide!!');
		return(false);
		}
	}
</SCRIPT>
<form action="inscription2.php" method='post'  onSubmit="return(VerifForm(this))">
          <table width="280" border="0" class="text1">
            <tr> 
              <td width="125" height="24">Login:</td>
              <td width="145"> <div align="left"> 
                  <input type="text" name="login">
                </div></td>
            </tr>
            <tr> 
              <td height="24">Password:</td>
              <td> <div align="left"> 
                  <input type="password" name="password">
                </div></td>
            </tr>
            <tr> 
              <td>Mail (Obligatoire):</td>
              <td><input type="text" name="mail"></td>
            </tr>
            <br>
            <tr> 
              <td>&nbsp;</td>
              <td><input type="submit" name="Submit" value="S'inscrire"></td>
            </tr>
          </table>
</form></p>