<?php
/**
 *Vue non utilis�e
 * @author Quentin BRISSON
 * @package app-site-emploi
 * @subpackage cv
 * @version 1.0.4
 */
class TriCVView {
	public function __construct() {
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function render() {
		$aff = '<b><a href="../../index.php?menu=4">Site Emploi</a>&nbsp;>&nbsp;';
		$aff .= 'CV\'s<br /><br /></b>';
		// Button Bar
		// $aff .= '<input type="button" value="Retour" onclick="javascript:history.back()" /><br/><br/>';
		$aff .= '<table>';
		$aff .= '<tr><td><a href="?action=cv&list=num">Liste des CV\'s tri�s par num�ro</a></td></tr>';
		$aff .= '<tr><td><a href="?action=cv&list=date">Liste des CV\'s tri�s par date</a></td></tr>';
		$aff .= '<tr><td><a href="?action=cv&list=pub">Liste des CV\'s non publi�s</a></td></tr>';
		$aff .= '</table>';
		$aff .= '<tr><td></td></tr>';
		$aff .= '<tr><td></td></tr>';
		$aff .= '<tr><td></td></tr>';
		$aff .= '<tr><td></td></tr>';

		echo $aff;
	}
}

?>