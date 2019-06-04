<?php
/**
 * Class utilis�e pour la gestion de l'information exp�rience
 * @author Quentin BRISSON
 * @package app-site-emploi
 * @subpackage mail
 * @version 1.0.4
 *
 */
class ListExperience {
	private $myList;
	public function __constructList($aList) {
		$this->myList = $aList;
	}

	// ###
	/**
	 * Retourne l'ensemble des exp�riences
	 */
	public function getList() {
		return $this->myList;
	}
	/**
	 * Ins�re l'ensemble des exp�riences
	 */
	public function setList($newValue) {
		$this->myList = $newValue;
	}

	// ###
	/**
	 * S�lectionne l'ensemble des exp�riences
	 */
	public function SQL_SELECT_ALL() {
		$this->myList = array ();

		$sql = "SELECT IDExp, Experience FROM emploi_experience";

		$result = mysqli_query ($_SESSION['LINK'], $sql ) or die ( mysqli_error ($_SESSION['LINK']) );

		while ( $line = mysqli_fetch_array  ( $result ) ) {
			$aModele = new Experience ();
			$aModele->setidexp ( $line [0] );
			$aModele->setexperience ( $line [1] );

			$this->myList [] = $aModele;
		}

		mysqli_free_result  ( $result );
	}
}
?>