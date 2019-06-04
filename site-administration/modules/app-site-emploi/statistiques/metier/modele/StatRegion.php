<?php
/**
 * Class utilis�e pour la gestion des r�gions dans les stats
 * @author Alexandre DIALLO
 * @package app-site-emploi
 * @subpackage statistiques
 * @version 1.0.4
 *
 */
class StatRegion {
	private $idregion;
	private $libelle;
	public function __construct() {
		$this->idregion = NULL;
		$this->libelle = '';
	}
	/**
	 *
	 * Retourne l'id de la r�gion
	 *
	 * @return int
	 */
	public function getidregion() {
		return $this->idregion;
	}
	/**
	 *
	 * retourne le nom de la r�gion
	 *
	 * @return string
	 */
	public function getlibelle() {
		return $this->libelle;
	}
	/**
	 *
	 * ins�re l'id de la r�gion
	 *
	 * @param int $newvalue
	 */
	public function setidregion($newvalue) {
		$this->idregion = $newvalue;
	}
	/**
	 *
	 * ins�re le nom de la r�gion
	 *
	 * @param string $newvalue
	 */
	public function setlibelle($newvalue) {
		$this->libelle = $newvalue;
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function sql_insert_pays() {
	}
	/**
	 * S�lectionne la r�gion demand�e
	 */
	public function sql_select_region() {
		$sql = "SELECT RegionID, Libelle FROM annuaire_lva_region WHERE RegionID = '%s' AND AnnuaireID = 6";

		$query = sprintf ( $sql, mysqli_real_escape_string ($_SESSION['LINK'], $this->idregion ) );

		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );

		if (mysqli_num_rows ( $result ) == 1) {
			$line = mysqli_fetch_array  ( $result );

			$this->idregion = $line [0];
			$this->libelle = $line [1];
		}

		mysqli_free_result  ( $result );
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function sql_delete_pays() {
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function sql_update_pays() {
	}
}