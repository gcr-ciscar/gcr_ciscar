<?php
/**
 *Vue non utilis�e
 * @author Quentin BRISSON
 * @package app-site-emploi
 * @subpackage reponse
 * @version 1.0.4
 */
class TriReponseView {
	public function __contruct() {
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function renderHTML() {
		$aff = '<b><a href="../../index.php?menu=4">Site Emploi</a>&nbsp;>&nbsp;R&eacute;ponses<br /></b>';

		$aff .= '<table>';
		$aff .= '<tr><td><a href="?action=reponse&list=num">Liste des r�ponses tri�es par num�ro</a></td></tr>';
		$aff .= '<tr><td><a href="?action=reponse&list=date">Liste des r�ponses tri�es par date</a></td></tr><br/>';

		$aff .= '<tr><td><a href="?action=reponse&list=liste">Liste des r�ponses par d&eacute;faut</a></td></tr>';
		$aff .= '</table>';

		echo $aff;
	}
}

?>