<?php
/**
 * Vue des r�ponses par r�gion et domaine
 * @author Alexandre DIALLO
 * @package app-site-emploi
 * @subpackage statistiques
 * @version 1.0.4
 */
class StatReponseRegionView {
	private $myListeregion;
	private $myListedomaine;
	private $myaStat;
	public function __construct($aListeregion, $aListedomaine, $aStat) {
		$this->myListeregion = $aListeregion;
		$this->myListedomaine = $aListedomaine;
		$this->myaStat = $aStat;
	}
	/**
	 * rendu du style de la vue
	 *
	 * @return string
	 */
	public function renderstyle() {
		$aff = '<style>';
		$aff .= 'td.center {text-align:center;}';
		$aff .= '</style>';

		return $aff;
	}
	/**
	 * rendu de la vue
	 */
	public function renderHTML() {
		// Mois et ann�e du jour
		$time = time ();
		$mois_actuel = date ( 'm', $time );
		$annee_actuelle = date ( 'Y', $time );

		$aff = $this->renderstyle ();
		$aff .= '<div id="FilAriane"><a href="../../../index.php?menu=4">Site Emploi</a>&nbsp;>&nbsp;';
		$aff .= '<a href="?">Statistiques Site Emploi</a>&nbsp;>&nbsp;R�ponses par r�gion et domaine d\'activit�</div><br />';

		$aff .= '<table><tr>';
		$aff .= '<td><img width="15px" height="15px" src="../../../include/images/export.jpg" /></td>';
		$aff .= '<td> <a   target="blank" href="../statistiques/metier/getReponseRegion.php?export=1&m=' . (isset ( $_GET ['m'] ) ? $_GET ['m'] : $mois_actuel) . '&a=' . (isset ( $_GET ['a'] ) ? $_GET ['a'] : $annee_actuelle) . '">  Exporter les donn�es affich�es</a></td>';
		$aff .= '</tr>';
		$aff .= '<tr></table>';

		// *************************************** D�but calendrier ******************************************

		$aff .= '<div align="center" ><form>';
		// Si on a demand� une date
		if (isset ( $_GET ['m'] ) && isset ( $_GET ['a'] )) {
			$aff .= '<a  style="background-image:url(\'../../../include/images/3.png\');" href="?action=rep&m=' . $_GET ['m'] . '&a=' . ($_GET ['a'] - 1);
			$aff .= '">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a  style="background-image:url(\'../../../include/images/3.png\');" href="?action=rep&m=';
			if ($_GET ['m'] == '01') {
				$aff .= '12&a=' . ($_GET ['a'] - 1);
			} else {
				$aff .= ($_GET ['m'] - 1) . '&a=' . $_GET ['a'];
			}
			$aff .= '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>';
			$aff .= '<select name="mois"  onChange="window.location=\'/admin/modules/app-site-emploi/statistiques/index.php?action=rep&m=\' + this.form.mois.value + \'&a=' . $_GET ['a'] . '\'">';
			$i = 1;
			while ( $i <= 12 ) {
				$aff .= '<option value="' . $i . '" ' . ($_GET ['m'] == $i ? 'selected' : '') . '>' . FunctionDate::getMois ( $i ) . '</option>';
				$i ++;
			}
			$aff .= '</select>  ';
			$aff .= $_GET ['a'] . ' <a style="background-image:url(\'../../../include/images/1.png\');" href="?action=rep&m=';
			if ($_GET ['m'] == '12') {
				$aff .= '01&a=' . ($_GET ['a'] + 1);
			} else {
				$aff .= ($_GET ['m'] + 1) . '&a=' . $_GET ['a'];
			}
			$aff .= '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a  style="background-image:url(\'../../../include/images/1.png\');" href="?action=rep&m=' . $_GET ['m'] . '&a=' . ($_GET ['a'] + 1);
			$aff .= '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>';
		} // Sinon on prend le moi et l'ann�e actuels
		else {
			$aff .= '<a  style="background-image:url(\'../../../include/images/3.png\');" href="?action=rep&m=' . $mois_actuel . '&a=' . ($annee_actuelle - 1);
			$aff .= '">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a style="background-image:url(\'../../../include/images/3.png\');" href="?action=rep&m=';
			if ($mois_actuel == '01') {
				$aff .= '12&a=' . ($annee_actuelle - 1);
			} else {
				$aff .= ($mois_actuel - 1) . '&a=' . $annee_actuelle;
			}
			$aff .= '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>';
			$aff .= ' <select name="mois"  onChange="window.location=\'/admin/modules/app-site-emploi/statistiques/index.php?action=rep&m=\' + this.form.mois.value + \'&a=' . $annee_actuelle . '\'">';
			$i = 1;
			while ( $i <= 12 ) {
				$aff .= '<option value="' . $i . '" ' . ($mois_actuel == $i ? 'selected' : '') . '>' . FunctionDate::getMois ( $i ) . '</option>';
				$i ++;
			}
			$aff .= '</select>  ';
			$aff .= $annee_actuelle . '<a style="background-image:url(\'../../../include/images/1.png\');" href="?action=offre_rep&m=';
			if ($mois_actuel == '12') {
				$aff .= '01&a=' . ($annee_actuelle + 1);
			} else {
				$aff .= ($mois_actuel + 1) . '&a=' . $annee_actuelle;
			}
			$aff .= '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a  style="background-image:url(\'../../../include/images/1.png\');" href="?action=rep&m=' . $mois_actuel . '&a=' . ($annee_actuelle + 1);
			$aff .= '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>';
		}
		$aff .= '</div></form><br />';
		// *************************************** Fin calendrier ******************************************
		// Cr�ation du tableau

		$aff .= '<table  id="TableList" width="100%" class="liste">';
		$aff .= '<tr class="title"><td align="center" ><b>R�gion</b></td>';
		foreach ( $this->myListedomaine->getList () as $aDA ) {
			$aff .= '<td align="center"><b>' . $aDA->getnomdomaine () . '</b></td>';
		}
		$aff .= '<td  align="center">Total</td></tr>';
		$row = 1;
		foreach ( $this->myListeregion->getList () as $aRegion ) {
			if ($aRegion->getlibelle () == 'Toute la France') {
				$aff .= '<tr>';
				$aff .= '<td class="' . ($row == 1 ? 'row1' : 'row2') . '" align="center"><b>' . $aRegion->getlibelle () . '</b></td>';
				foreach ( $this->myListedomaine->getList () as $aDA ) {
					$total_ligne = 0;
					$aStatAll = new StatReponseRegion ();
					$aff .= '<td class="' . ($row == 1 ? 'row1' : 'row2') . '" align="center" >' . $aStatAll->SQL_COUNT ( $aDA->getiddomaine () ) . '</td>';
					if (array_key_exists ( $aRegion->getidregion () . '-' . $aDA->getiddomaine (), $this->myaStat )) {
						$total_ligne += $this->myaStat [$aRegion->getidregion () . '-' . $aDA->getiddomaine ()];
					}
				}
				$aff .= '<td class="' . ($row == 1 ? 'row1' : 'row2') . '" align="center">' . $total_ligne . '</td></tr>';
			} else 
			{ // total par ligne
				$total_ligne = 0;
				$aff .= '<tr>';
				$aff .= '<td class="' . ($row == 1 ? 'row1' : 'row2') . '" align="center"><b>' . $aRegion->getlibelle () . '</b></td>';
				foreach ( $this->myListedomaine->getList () as $aDA ) {
					$aff .= '<td class="' . ($row == 1 ? 'row1' : 'row2') . '" align="center" >' . (array_key_exists ( $aRegion->getidregion () . '-' . $aDA->getiddomaine (), $this->myaStat ) ? $this->myaStat [$aRegion->getidregion () . '-' . $aDA->getiddomaine ()] : 0) . '</td>';
					if (array_key_exists ( $aRegion->getidregion () . '-' . $aDA->getiddomaine (), $this->myaStat )) {
						$total_ligne += $this->myaStat [$aRegion->getidregion () . '-' . $aDA->getiddomaine ()];
					}
				}

				$aff .= '<td class="' . ($row == 1 ? 'row1' : 'row2') . '" align="center" >' . $total_ligne . '</td>';
			}
			$row = ($row == 1 ? 2 : 1);
		}

		// Total par colonne et total g�n�ral
		$aff .= '<tr><td class="' . ($row == 1 ? 'row1' : 'row2') . '" align="center">Total</td>';
		$total = 0;
		foreach ( $this->myListedomaine->getList () as $aDA ) {
			$aStatAll = new StatReponseRegion ();
			$data = $aStatAll->SQL_COUNT_TOT ( $aDA->getiddomaine (), isset ( $_GET ['m'] ) ? $_GET ['m'] : date ( 'm', $time ), isset ( $_GET ['a'] ) ? $_GET ['a'] : date ( 'Y', $time ) );
			$total += $data;
			$aff .= '<td class="' . ($row == 1 ? 'row1' : 'row2') . '" align="center"><b>' . $data . '</b></td>';
		}
		$aff .= '<td  class="' . ($row == 1 ? 'row1' : 'row2') . '" align="center">' . $total . '</tr></table><br />';
		echo $aff;
	}
}
?>