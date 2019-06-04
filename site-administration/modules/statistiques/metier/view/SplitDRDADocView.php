<?php
/**
 * Vue utilis�e dans la r�partition par DR affichant le nombre de consultations par document pour un domaine donn� et pour un DR donn� par mois/ann�e
 * @author Alexandre DIALLO
 * @package site-administration
 * @subpackage statistiques
 */
class SplitDRDADocView {
	private $myList;
	private $myTotal;
	private $myDomaine;
	public function __construct($aList, $aTotal, $aDomaine) {
		$this->myList = $aList;
		$this->myTotal = $aTotal;
		$this->myDomaine = $aDomaine;
	}
	/**
	 * Cr�ation du tableau pour un domaine et une r�gion donn�s
	 */
	public function renderdomaine() {
		$aff = '';
		foreach ( $this->myList as $aCle => $aVerif ) {
			// Cr�ation du tableau
			$aff .= '<tr class="DOM-' . $this->myDomaine . '" >';
			$aff .= '	<td class="row1" width="200"></td><td class="row1"></td><td   class="row2" align="left" style="font-weight:bold;padding-left:5px;" >' . utf8_encode ( $aCle ) . '</b></td>';
			$aff .= '	<td   class="row2" align="center" width="100">' . $aVerif . '</td>';
			$aff .= '	<td   class="row2" align="center" width="100">';
			$aff .= round ( ($aVerif / $this->myTotal) * 100 );
			$aff .= '%</td>';
			$aff .= '</tr>';
		}
		echo $aff;
	}
}
?>