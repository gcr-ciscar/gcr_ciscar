<?php
/**
 * @author Philippe GERMAIN
 * @package portail-ciscar
 * @subpackage commun
 * @version 1.0.4
 */
class HomePageNonConnecteImprnetView {
	public function __construct() {
	}
	public function renderHTML($msg = Null, $urlReturn = Null) {
		$aParam = new Param ();
		$aParam->search_param ( 'CISCAR_IMPRNET_HOMEPAGE_IMAGE' );
		$aParam2 = new Param ();
		$aParam2->search_param ( 'CISCAR_IMPRNET_HOMEPAGE_URL' );
		
		$aff = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Login_ciscar.dwt" codeOutsideHTMLIsLocked="false" -->
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
				<META NAME="robots" CONTENT="noindex,nofollow">
				<meta name="description" content="Acc�dez au portail CISCAR et d�couvrez tous les produits et services adapt�s aux m�tiers de \'automobile : informatique, mat�riel de garage, Merchandising & Am�nagement, papeterie et mailing."/>
				<!-- InstanceBeginEditable name="doctitle" -->
				<title>CISCAR : Connectez-vous � votre centrale d\'achat</title>';
		
		$aff .= '<!-- Add jQuery library -->
				<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		
				<!-- Add mousewheel plugin (this is optional) -->
				<script type="text/javascript" src="include/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

				<!-- Add fancyBox -->
				<link rel="stylesheet" href="include/js/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
				<script type="text/javascript" src="include/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>

				<!-- Optionally add helpers - button, thumbnail and/or media -->
				<link rel="stylesheet" href="include/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
				<script type="text/javascript" src="include/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
				<script type="text/javascript" src="include/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

				<link rel="stylesheet" href="include/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
				<script type="text/javascript" src="include/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


				<script type="text/javascript">
				$(function(){
								// login lost => observe link with id "login_lost_link"
								$("#login_lost_link").fancybox({
											   overlayOpacity:0.8,
											   overlayColor:\'#000000\'
								});
				});

				</script>

			<script language="javascript">
			function icomV5(urlReturn){
				var link = \'\';
				link = \'index.php?action=icomV5\';
				document.forms[\'FormConnection\'].action = link;
				document.forms[\'FormConnection\'].submit();
			}
			function geolane(urlReturn){
				var link = \'geolane\';
				link = \'index.php?action=geolane\';
				document.forms[\'FormConnection\'].action = link;
				document.forms[\'FormConnection\'].submit();
			}
			function ciscarnl(urlReturn){
				var link = \'ciscarnl\';
				link = \'http://ciscar.nlvm\';
				document.forms[\'FormConnection\'].action = link;
				document.forms[\'FormConnection\'].submit();
			}
				</script>
				

				<!-- InstanceEndEditable -->
				<link rel="stylesheet" type="text/css" href="include/css/styles.css" media="screen" />
				<meta name="description" content="CISCAR, Centrale d\'Achats des réseaux automobiles." />
				<meta name="robots" content="noindex, nofollow">
				<link rel="icon" href="../favicon.ico" />
				<!-- InstanceBeginEditable name="head" -->
				<!-- InstanceEndEditable -->
				</head>';
		
		$aff .= '<body>';
		
		if ($urlReturn !== Null) {
			$aff .= '<form method="POST" name="FormConnection" action="index.php?action=icomV5' . $urlReturn . '">';
		} else {
			$aff .= '<form method="POST" name="FormConnection" action="index.php?action=icomV5">';
		}
		
		$aff .= '<div id="bandeau">
				  <div style="float:left;">CISCAR, Centrale d\'Achats des R�seaux Automobiles</div>';
		//$aff.='<div id="flag_gb"><a class="flag_link" href="http://ciscar.net"><img src="include/images/gb.png" title="gb" text="gb"></a></div>';
		//$aff.='<div id="flag_de"><a class="flag_link" href="http://ciscar.net"><img src="include/images/de.png" title="de" text="de"></a></div>';
		//$aff.='<div id="flag_nl"><a class="flag_link" href="http://ciscar.be/nl"><img src="include/images/nl.png" title="nl" text="nl"></a></div>';
		//$aff.='<div id="flag_be"><a class="flag_link" href="http://ciscar.be/fr"><img src="include/images/be.png" title="be" text="be"></a></div>';
		//if ($urlReturn !== Null)
		//	$aff .= '<div style="float:right;"><a href="javascript: ciscarnl(\'' . $urlReturn . '\')">ciscarnl</a></div>';
			// $aff .= '<div style="float:right;"><a href="javascript: geolane(\''.$urlReturn.'\')">geolane</a></div>';
		//else
			// $aff .= '<div style="float:right;"><a href="javascript: geolane(\'\')">geolane</a></div>';
		//	$aff .= '<div style="float:right;"><a href="javascript: ciscarnl(\'\')">ciscarnl</a></div>';
		
		$aff .= '</div>

				<div class="clearboth"></div>

				<div id="wrapper">
					<div id="container">
						<div id="logo"><a href="index.php"><img src="include/images/logo_CISCAR.jpg" width="293" height="110" alt="CISCAR, votre Centrale d\'Achats" /></a></div>
						
						<div class="clearboth"></div>
					
						<div id="filigrane">

				<!-- InstanceBeginEditable name="region_editable" -->';
		
		$aff .= '<table cellpadding="0" cellspacing="0">
							<tr>
							<td style="border-right:solid 1px #FFFFFF;" valign="top">
							<div class="index_left_content">
							  <h1>Demandez vos codes de connexion CISCAR</h1>
							  <p>Simple et rapide ! Remplissez le formulaire en cliquant sur le bouton ci-dessous, puis profitez de tous les services CISCAR.<br />
								Commandez comme avant vos imprim�s Renault via le menu jaune :<br />
								- les r�f�rences produits ne changent pas,<br />
								- pas de paiement en ligne.<br />
							  </p>
							  <p><strong>D�couvrez tous les autres produits CISCAR </strong>en plus des imprim�s OFFICIELS Renault.</p>
							  <p><a href="?action=quisommesnous">En savoir plus sur CISCAR</a> ...</p>
							  <p>&nbsp;</p></div>
						   </td>
							<td style="border-left:solid 1px #b4b4b4;" valign="top">
							<div class="index_right_content">
							  <h1>Commandez en ligne vos imprim�s Renault</h1>
							  <p>Retrouvez tous vos imprim�s VN/VO, APV, Rent et Divers, � la commande en ligne avec vos identifiants CISCAR :</p>';
		$aff .= '<span id="formErr">' . $msg . '</span>
							  <p>Nom d\'utilisateur<br/>
							  <input class="input_login" name="username" type="text"';
		if (isset ( $_GET ['nclogin'] ))
			$aff .= ' value=' . $_GET ['nclogin'] . '></p>';
		else
			$aff .= '></p>';
		$aff .= '<p>Mot de passe<br/>
							  <input class="input_login" name="password" type="password"';
		if (isset ( $_GET ['ncpwd'] ))
			$aff .= ' value=' . base64_decode ( $_GET ['ncpwd'] ) . '><br/>';
		else
			$aff .= '><br/>';
		
		$aff .= '				  <!-- LINK THAT OPEN FANCYBOX -->
				<a href="#login_lost" id="login_lost_link">Mot de passe oubli� ?</a></p>
							<p><input type="checkbox" name="loginAuto">Se souvenir de moi</p>';
		$aff .= '<tr>
				   <td>
					   <div class="index_left_content"> <a href="?action=souscrireImprnet"><img src="include/images/fr_bouton_demandez_codes.jpg" width="236" height="50" alt="S\'inscrire" border="0" /></a>
					   </div>
					</td>
					<td>
						<div class="index_right_content"> <input type="submit" value="" name="submitButton" class="fr_bouton_se_connecter">
						</div>
					</td>
					</tr>
					</table>
					</form>';
		$aff .= '<!-- LOGIN LOST -->';
		$aff .= '<div style="display:none;"><div id="login_lost">';
		$aff .= '             <h2>Mot de passe oubli� ?</h2>';
		$aff .= '              <p>Vous avez perdu ou oubli� votre mot de passe ?<br/>Indiquez votre adresse e-mail ci-dessous pour le recevoir � nouveau :</p>';
		$aff .= '              <div><form id="formmotdepasseperdu"  action="?action=motdepasseperdu" method="POST" name="motdepasseperdu" ><input type="text" value="" class="input_login_lost" id="mail" name="mail" /><input type="submit" value="" name="submitButton" class="fr_bouton_envoyer"/></form></div>';
		
		$aff .= '               <div class="clearboth"></div>';
		$aff .= '              <div id="login_lost_error" class="display_none">Adresse e-mail introuvable ...<br /><a href="?action=premierevisite"> Demander mes codes</a></div>';
		$aff .= '             <div id="login_lost_success" class="display_none">Nous venons de vous envoyer un e-mail avec votre mot de passe.<br/>Merci de vérifier votre boite de réception (ou courrier indésirable).</div>';
		$aff .= '</div></div>';
		// PUB
		
		if ($aParam->getValue () != '') {
			$aff .= '<table><tr><td height="42" colspan="3">&nbsp;</td></tr><tr><td width="236">&nbsp;</td><td width="728">';
			if (strpos ( $aParam->getValue (), "swf" ) === false) {
				$aff .= '<a href="' . $aParam2->getValue () . '" target="_BLANK">';
				$aff .= '<img src="' . $aParam->getValue () . '" Border="0" width="728" height="90"></a>';
			} else {
				$aff .= '<object align="left" width="728" height="90" id="bannerPub.swf" valign="up" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">';
				$aff .= '<param value="' . $aParam->getValue () . '" name="src">';
				$aff .= '<param value="high" name="quality">';
				$aff .= '<param value="transparent" name="wmode" >';
				$aff .= '<param value="mscssid=%7BFC687A65-CF7B-4457-A3B3-8A4FBE1B64A3%7D" name="FlashVars">';
				$aff .= '<embed width="728" height="90" wmode="transparent" flashvars="mscssid=%7BFC687A65-CF7B-4457-A3B3-8A4FBE1B64A3%7D" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" src="' . $aParam->getValue () . '">';
				$aff .= '</object>';
			}
			$aff .= '</td><td width="236">&nbsp;</td><tr><tr><td height="42" colspan="3">&nbsp;</td></tr></table>';
		}
		
		$aff .= '		<!-- InstanceEndEditable --></div>
						
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
						var ga = document.createElement(\'script\'); 
						ga.type = \'text/javascript\'; 
						ga.async = true;
						ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
						var s = document.getElementsByTagName(\'script\')[0]; 
						s.parentNode.insertBefore(ga, s);
					})();
					
					</script>';
		// Mot de passe oublier
		$aff .= '<script type="text/javascript">
				$("#formmotdepasseperdu").on("submit", function() {
					var mail = $("#mail").val();
					if(mail == "") {
						alert("Le champs doit êtres remplis");
					} else {
						// appel Ajax
						$.ajax({
							url: "/index.php?action=ajaxmotdepasseperdu", 
							type: "POST", 
							data:"mail="+mail+" & submitButton=ok",
							dataType : "html",
							success: function(code_html, statut){
								if(code_html!="ko"){								
									if(code_html=="false" || code_html=="falsefalse" || code_html=="falsefalseok"){
										alert("Erreur");
									}else{
										$("#login_lost_error").hide();
										$("#login_lost_success").show();
									}
								}else{
										$("#login_lost_error").show();
										$("#login_lost_success").hide();
								}
							}
						});
						return false; 		
					}	
				return false; 	
			});		
			$("#mail").click(function() {
				$("#login_lost_error").hide();
			});
			</script>
		</body>
		<!-- InstanceEnd --></html>';
		return $aff;
	}
}
?>