<?php
/**
 * Class utilis�e pour la gestion des r�gions dans les stats
 * @author Alexandre DIALLO
 * @package app-site-emploi
 * @subpackage statistiques
 * @version 1.0.4
 *
 */
class StatListRegion {
	private $myList;
	public function __constructList($aList) {
		$this->myList = $aList;
	}

	// ###
	/**
	 * Retourne l'ensemble des r�gions
	 */
	public function getList() {
		return $this->myList;
	}
	/**
	 * Ins�re l'ensemble des r�gions
	 */
	public function setList($newValue) {
		$this->myList = $newValue;
	}

	// ###
	/**
	 * S�lectionne toutes les r�gions
	 */
	public function SQL_SELECT_ALL() {
		$this->myList = array ();

		$sql = "SELECT RegionID, Libelle FROM annuaire_lva_region WHERE AnnuaireID = 6";

		$result = mysqli_query ($_SESSION['LINK'], $sql ) or die ( mysqli_error ($_SESSION['LINK']) );

		while ( $line = mysqli_fetch_array  ( $result ) ) {
			$aModele = new StatRegion ();
			$aModele->setidregion ( $line [0] );
			$aModele->setlibelle ( $line [1] );

			$this->myList [] = $aModele;
		}

		mysqli_free_result  ( $result );
	}
	/**
	 *
	 * S�lectionne une r�gion en fonction de son id
	 *
	 * @param int $id
	 */
	public function SQL_SELECT_REGION($id) {
		$sql = "SELECT Libelle FROM annuaire_lva_region WHERE AnnuaireID=2 AND RegionID = '%s'";

		$query = sprintf ( $sql, mysqli_real_escape_string ($_SESSION['LINK'], $id ) );

		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );
		$line = mysqli_fetch_array  ( $result );
		return $line [0];
		mysqli_free_result  ( $result );
	}
}

?>
