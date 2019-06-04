<?php
/**
 * Class utilis�e pour la gestion de l'information exp�rience
 * @author Quentin BRISSON
 * @package app-site-emploi
 * @subpackage mail
 * @version 1.0.4
 *
 */
class Experience {
	private $idexp;
	private $experience;
	public function __construct() {
		$this->idexp = NULL;
		$this->experience = '';
	}

	// Getteur
	/**
	 *
	 * Retourne l'id de l'exp�rience
	 *
	 * @return int
	 */
	public function getidexp() {
		return $this->idexp;
	}
	/**
	 *
	 * retourne le nom de l'exp�rience
	 *
	 * @return string
	 */
	public function getexperience() {
		return $this->experience;
	}

	// Setteur
	/**
	 *
	 * ins�re l'id de l'exp�rience
	 *
	 * @param int $newvalue
	 */
	public function setidexp($newvalue) {
		$this->idexp = $newvalue;
	}
	/**
	 *
	 * ins�re le nom du domaine
	 *
	 * @param string $newvalue
	 */
	public function setexperience($newvalue) {
		$this->experience = $newvalue;
	}
	/**
	 * S�lectionne l'exp�rience demand�e
	 */
	public function sql_select() {
		$sql = "SELECT IDExp, Experience FROM emploi_experience WHERE IDExp = '%s'";

		$query = sprintf ( $sql, mysqli_real_escape_string ($_SESSION['LINK'], $this->idexp ) );

		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );

		if (mysqli_num_rows ( $result ) == 1) {
			$line = mysqli_fetch_array  ( $result );

			$this->idexp = $line [0];
			$this->experience = $line [1];
		}

		mysqli_free_result  ( $result );
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function sql_delete() {
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function sql_insert() {
	}
	/**
	 *
	 * @deprecated
	 *
	 */
	public function sql_update() {
	}
}

?>