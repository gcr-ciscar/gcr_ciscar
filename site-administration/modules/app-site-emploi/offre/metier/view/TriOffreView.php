<?php
/**
 *Vue non utilis�e
 * @author Quentin BRISSON
 * @package app-site-emploi
 * @subpackage offre
 * @version 1.0.4
 */
class TriOffreView {
	public function __construct() {
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function render() {
		$aff = '<b><a href="../../index.php?menu=4">Site Emploi</a>&nbsp;>&nbsp;Offres<br /><br /></b>';

		$aff .= '<table>';
		$aff .= '<tr><td><a href="?action=offres&list=num">Liste des offres tri�es par num�ro</a></td></tr>';
		$aff .= '<tr><td><a href="?action=offres&list=date">Liste des offres tri�es par date</a></td></tr>';
		$aff .= '<tr><td><a href="?action=offres&list=pub">Liste des offres non plubli�es</a></td></tr>';
		$aff .= '</table>';
		$aff .= '<tr><td></td></tr>';
		$aff .= '<tr><td></td></tr>';
		$aff .= '<tr><td></td></tr>';
		$aff .= '<tr><td></td></tr>';

		echo $aff;
	}
}

?>