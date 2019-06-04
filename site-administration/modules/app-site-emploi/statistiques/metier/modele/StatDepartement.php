<?php
/**
 * Class utilis�e pour la gestion des d�partements dans les stats
 * @author Alexandre DIALLO
 * @package app-site-emploi
 * @subpackage statistiques
 * @version 1.0.4
 *
 */
class StatDepartement {
	private $iddepartement;
	private $libelle;
	private $code;
	public function __construct() {
		$this->iddepartement = NULL;
		$this->libelle = '';
		$this->code = '';
	}
	/**
	 *
	 * Retourne l'id d�partement
	 *
	 * @return int
	 */
	public function getiddepartement() {
		return $this->iddepartement;
	}
	/**
	 *
	 * Retourne le nom du d�partement
	 *
	 * @return string
	 */
	public function getlibelle() {
		return $this->libelle;
	}
	/**
	 *
	 * Retourne le num�ro du d�partement
	 *
	 * @return int
	 */
	public function getcode() {
		return $this->code;
	}
	/**
	 *
	 * Ins�re l'id du d�partement
	 *
	 * @param int $newvalue
	 */
	public function setiddepartement($newvalue) {
		$this->iddepartement = $newvalue;
	}
	/**
	 *
	 * Ins�re le nom du d�partement
	 *
	 * @param string $newvalue
	 */
	public function setlibelle($newvalue) {
		$this->libelle = $newvalue;
	}
	/**
	 * Ins�re le num�ro du d�partement
	 *
	 * @param int $newvalue
	 */
	public function setcode($newvalue) {
		$this->code = $newvalue;
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function sql_insert_pays() {
	}
	/**
	 * S�lectionne le d�partement demand�
	 */
	public function sql_select_departement() {
		$sql = "SELECT DepartementID, Libelle, Code FROM annuaire_lva_departement WHERE DepartementID = '%s'";

		$query = sprintf ( $sql, mysqli_real_escape_string ($_SESSION['LINK'], $this->iddepartement ) );

		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );

		if (mysqli_num_rows ( $result ) == 1) {
			$line = mysqli_fetch_array  ( $result );

			$this->iddepartement = $line [0];
			$this->libelle = $line [1];
			$this->code = $line [2];
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