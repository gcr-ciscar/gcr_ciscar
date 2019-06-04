<?php
class Doc_PremiereVisiteImprnet {
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
					<meta name="robots" content="noindex, nofollow">
					<link rel="icon" href="../favicon.ico" />
					<!-- InstanceBeginEditable name="head" -->
					<!-- InstanceEndEditable -->
					</head>';
		$aff .= '<body>
					<div id="bandeau">
						<div style="float:left;">CISCAR, Centrale d\'Achats des R�seaux Automobiles</div>
					</div>

					<div class="clearboth"></div>

					<div id="wrapper">
						<div id="container">
							<div id="logo"><a href="index.php"><img src="include/images/logo_CISCAR.jpg" width="293" height="110" alt="CISCAR, votre Centrale d\'Achats" /></a></div>
							
							<div class="clearboth"></div>
						
							<div id="filigrane">

							<!-- InstanceBeginEditable name="region_editable" -->

						  <div class="subscribe_content">
							  <h1>Demandez vos codes de connexion CISCAR</h1>
							  <p>Remplissez le formulaire ci-dessous, puis profitez de tous les services CISCAR. Commandez comme avant vos imprim�s Renault :<br/>
								- les r�f�rences produits ne changent pas,<br/>
							  - pas de paiement en ligne.</p>
							  <p>D�couvrez tous les autres produits CISCAR en plus des imprim�s OFFICIELS Renault.</p>
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
						msg += "Le champ \'Prénom\' ne peut �tre vide\n";
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
					if($("#pFonction").val()=="")
					{
						msg += "Le champ \'Fonction\' ne peut �tre vide\n";
										result = false;
					}
					if($("#pRaisonSociale").val()=="")
					{
						msg += "Le champ \'Raison Sociale\' ne peut �tre vide\n";
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
						msg += "Le champ \'Téléphone\' ne peut �tre vide\n";
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
		$aff .= '         	<p>Votre Fonction *&nbsp;<input type="text" name="pFonction" id="pFonction" class="input_suscribe" /></p>';
		$aff .= '           </div>';
		$aff .= '           </td>';
		$aff .= '           <td valign="top">';
		$aff .= '           <div class="subscribe_right_content">';
		$aff .= '           	<p>Raison Sociale *&nbsp;<input type="text" name="pRaisonSociale" id="pRaisonSociale" class="input_suscribe" /></p>';
		$aff .= '           	<p>Adresse *&nbsp;<input type="text" name="pAdresse1" id="pAdresse1" class="input_suscribe" /></p>';
		$aff .= '              <p>Code postal *&nbsp;<input type="text" name="pCodePostal" id="pCodePostal" class="input_suscribe" /></p>';
		$aff .= '              <p>Ville *&nbsp;<input type="text" name="pVille" id="pVille" class="input_suscribe" /></p>';
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
					</div>
					<!-- InstanceEndEditable --></div>
						
					<div id="footer"><a href="index.php">Se connecter</a>  |   <a href="?action=souscrire">S\'inscrire</a>  |  <a href="?action=quisommesnous">Qui sommes-nous</a></div>
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