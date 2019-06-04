<?php
class Doc_PremiereVisite {
	public function __construct() {
	}
	public function render2HTML() {
		$aff = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Login_ciscar.dwt" codeOutsideHTMLIsLocked="false" -->
					<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<meta name="description" content=" Faites partie du r�seau CISCAR et b�n�ficiez de produits sp�cifiques � votre activit�, de conditions d\'achats privil�gi�es et d\'informations m�tier."/>
					<!-- InstanceBeginEditable name="doctitle" -->
					<title>CISCAR : Inscrivez-vous</title>
					<!-- Add jQuery library -->
					<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
					<!-- InstanceEndEditable -->
					<link rel="stylesheet" type="text/css" href="include/css/styles.css" media="screen" />
					<meta name="description" content="CISCAR, Centrale d\'Achats des r�seaux automobiles." />
					<meta name="robots" content="index, follow" />
					<link rel="icon" href="../favicon.ico" />
					<!-- InstanceBeginEditable name="head" -->
					<!-- InstanceEndEditable -->
					</head>';
		$aff .= '<body>
					<div id="bandeau">
						<div style="float:left;">CISCAR, Centrale d�Achats des R�seaux Automobiles</div>
					</div>
				
					<div class="clearboth"></div>
				
					<div id="wrapper">
						<div id="container">
							<div id="logo"><a href="index.php"><img src="include/images/logo_CISCAR.jpg" width="293" height="110" alt="CISCAR, votre Centrale d\'Achats" /></a></div>
				
							<div class="clearboth"></div>
				
							<div id="filigrane">
				
							<!-- InstanceBeginEditable name="region_editable" -->
				
						  <div class="subscribe_content">
							  <h1>Inscrivez-vous</h1>
							  <p>Compl�tez le formulaire ci-dessous et faites partie du r�seau CISCAR pour b�n�ficier  :<br/>
								- d\'informations m�tier, <br/>
							  - de produits sp�cifiques � votre activit�,<br/>
							  - de conditions d\'achats privil�gi�es.</p>
							  <p>L\'acc�s au site CISCAR est r�serv� aux professionnels de l\'automobile :       	      concessionnaires, agents, garages ind�pendants, centres de formation, etc. </p>
						</div>';
		$aff .= '<script language="JavaScript">
				function verifEmail(myString)
				{
					var reg = /^([a-zA-Z0-9_-])+([.]?[a-zA-Z0-9_-]{1,})*@([a-zA-Z0-9-_]{2,}[.])+[a-zA-Z]{2,4}$/
					return (reg.exec(myString)!=null)
				}
				
				function validationPremiereVisite()
				{
					var result = true;
					var msg = "";
				
					if($("#pNom").val()=="")
					{
						msg += "Le champ \'Nom\' ne peut �tre vide\n";
						result = false;
					}
					if($("#pPrenom").val()=="")
					{
						msg += "Le champ \'Pr�nom\' ne peut �tre vide\n";
						result = false;
					}
					if($("#pMail").val()=="")
					{
						msg += "Le champ \'Adresse mail\' ne peut �tre vide\n";
						result = false;
					}
					else
					{
						if(!verifEmail($("#pMail").val()))
						{
							msg += "Le champ \'Adresse mail\' est mal form�\n";
							result = false;
						}
					}
					if($("#pMarque").val()=="")
					{
						msg += "Le champ \'Marque\' ne peut �tre vide\n";
						result = false;
					}
					if($("#pFonction").val()=="")
					{
						msg += "Le champ \'Fonction\' ne peut �tre vide\n";
										result = false;
					}
					if($("#pCategorie").val()=="")
					{
						msg += "Le champ \'Cat�gorie\' ne peut �tre vide\n";
						result = false;
					}
					if($("#pRaisonSociale").val()=="")
					{
						msg += "Le champ \'Raison Sociale\' ne peut �tre vide\n";
						result = false;
					}
					if($("#pNumSiret").val()=="")
					{
						msg += "Le champ \'Num�ro SIRET\' ne peut �tre vide\n";
						result = false;
					}
					if($("#pAdresse1").val()=="")
					{
						msg += "Le champ \'Adresse\' ne peut �tre vide\n";
						result = false;
					}
					if($("#pCodePostal").val()=="")
					{
						msg += "Le champ \'Code postal\' ne peut �tre vide\n";
						result = false;
					}
					if($("#pVille").val()=="")
					{
						msg += "Le champ \'Ville\' ne peut �tre vide\n";
						result = false;
					}
					if($("#pTelephone").val()=="")
					{
						msg += "Le champ \'T�l�phone\' ne peut �tre vide\n";
						result = false;
					}
					if(!result)
					{
						alert(msg);
					}
					return result;
				}
				</script>';
		$aff .= '<form method="POST" action="?action=souscrire" onsubmit="return validationPremiereVisite()">';
		$aff .= '      <table cellpadding="0" cellspacing="0">';
		$aff .= '          <tr>';
		$aff .= '           <td valign="top">';
		$aff .= '           <div class="subscribe_left_content">';
		$aff .= '           	<p>NOM *&nbsp;<input type="text" name="pNom" id="pNom" class="input_suscribe" /></p>';
		$aff .= '           	<p>Pr�nom *&nbsp;<input type="text" name="pPrenom" id="pPrenom"  class="input_suscribe" /></p>';
		$aff .= '          	<p>Adresse mail *&nbsp;<input type="text" name="pMail" id="pMail"  class="input_suscribe" /></p>';
		$aff .= '           	<p>T�l�phone *&nbsp;<input type="text" name="pTelephone" id="pTelephone" class="input_suscribe" /></p>';
		$aff .= '          	<p>Portable &nbsp;<input type="text" name="pPortable" id="pPortable" class="input_suscribe" /></p>';
		$aff .= '         	<p style="display:none;">Fax &nbsp;<input type="text" name="pFax" id="pFax" class="input_suscribe" /></p>';
		$aff .= '         	<p>Votre Fonction *&nbsp;<input type="text" name="pFonction" id="pFonction" class="input_suscribe" /></p>';
		$aff .= '          	<p>Marques distribu�es  *&nbsp;<input type="text" name="pMarque" id="pMarque" class="input_suscribe" /></p>';
		$aff .= '            	<p>Agent,  Concession, etc *&nbsp;';
		$aff .= '             <input type="text" name="pCategorie" id="pCategorie" class="input_suscribe" /></p>';
		$aff .= '           </div>';
		$aff .= '           </td>';
		$aff .= '           <td valign="top">';
		$aff .= '           <div class="subscribe_right_content">';
		$aff .= '           	<p>Raison Sociale *&nbsp;<input type="text" name="pRaisonSociale" id="pRaisonSociale" class="input_suscribe" /></p>';
		$aff .= '           	<p>Adresse *&nbsp;<input type="text" name="pAdresse1" id="pAdresse1" class="input_suscribe" /></p>';
		$aff .= '          	<p>Compl�ment adresse &nbsp;<input type="text" name="pAdresse2" id="pAdresse2" class="input_suscribe" /></p>';
		$aff .= '              <p>Code postal *&nbsp;<input type="text" name="pCodePostal" id="pCodePostal" class="input_suscribe" /></p>';
		$aff .= '              <p>Ville *&nbsp;<input type="text" name="pVille" id="pVille" class="input_suscribe" /></p>';
		$aff .= '              <p>Num�ro SIRET *&nbsp;<input type="text" name="pNumSiret" id="pNumSiret" class="input_suscribe" /></p>';
		// $aff .= ' <p>Groupe&nbsp;<input type="text" name="pGroupe" id="pGroupe" class="input_suscribe" /></p>';
		// $aff .= ' <p>Code Client CISCAR&nbsp;<input type="text" name="pCodeClientCISCAR" id="pCodeClientCISCAR" class="input_suscribe" /></p>';
		$aff .= '			</div>';
		$aff .= '          <tr>';
		$aff .= '          	<td>';
		$aff .= '           	</td>';
		$aff .= '          	<td><span class="subscribe_right_content"><input type="submit" name="submitButton" value="" class="fr_button_sinscrire" ></span></td>';
		$aff .= '          </tr>';
		$aff .= '		</table>';
		$aff .= '</form>';
		
		$aff .= '<div class="subscribe_content">
							  <p>* Champs obligatoires</p>
							  <p>Vous recevrez, apr�s v�rification de vos coordonn�es, vos codes d\'acc�s.<br />
								Attention ces codes sont personnels, CISCAR ne pourra �tre tenu responsable en cas de transmission (de ces derniers) � une tierce personne.</p>
							  <p>Nous vous pr�cisons, que, pour la validation de votre premi�re commande, nous aurons besoin des documents suivants en compl�ment :<br />
								- Extrait KBis<br />
								- Relev� d\'identit� bancaire (RIB)</p>
							  <p>Nous vous remercions de votre compr�hension.<br />
							</p>
					</div>
					<!-- InstanceEndEditable --></div>
				
					<div id="footer"><a href="index.php">Se connecter</a>  |   <a href="?action=souscrire">S�inscrire</a>  |  <a href="?action=quisommesnous">Qui sommes-nous</a></div>
				</div>
				
				<img src="include/images/bg_footer.jpg" width="1209" height="145" alt="Footer" border="0" />
				
			</div>';
		
		// GOOGLE ANALYTICS
		$aff .= '<script type="text/javascript">
				
				var _gaq = _gaq || [];
				_gaq.push([\'_setAccount\', \'UA-27893097-2\']);
				_gaq.push([\'_trackPageview\']);
				
				(function() {
				var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
				ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
				var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
				})();
				
				</script>';
		
		$aff .= '</body>';
		$aff .= '</html>';
		
		return $aff;
	}
}
?>