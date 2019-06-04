<?php
/**
 * Class permettant d'avoir toutes les infos d'une consultation
 * @author Alexandre DIALLO
 * @package app-site-emploi
 * @subpackage statistiques
 * @version 1.0.4
 */
class Consult {
	private $title;
	private $consult;
	private $espace;
	private $nom;
	private $prenom;
	private $groupe;
	private $domaine;
	private $date;
	private $fonction;
	public function __construct() {
		$this->title = '';
		$this->consult = '';
		$this->espace = '';
		$this->nom = '';
		$this->prenom = '';
		$this->groupe = '';
		$this->domaine = '';
		$this->date = '';
		$this->fonction = '';
	}

	// ###

	// getteurs

	/**
	 *
	 * Retourne le titre de la consultation
	 *
	 * @return string
	 */
	public function gettitle() {
		return $this->title;
	}
	/**
	 * retourne le nombre de consultation
	 *
	 * @return int
	 */
	public function getconsult() {
		return $this->consult;
	}
	/**
	 * retourne l'espace de la page
	 *
	 * @return string
	 */
	public function getespace() {
		return $this->espace;
	}
	/**
	 * retourne le nom de l'utilisateur
	 *
	 * @return string
	 */
	public function getnom() {
		return $this->nom;
	}
	/**
	 * retourne le pr�nom de l'utilisateur
	 *
	 * @return string
	 */
	public function getprenom() {
		return $this->prenom;
	}
	/**
	 * retourne le groupe de l'utilisateur
	 *
	 * @return string
	 */
	public function getgroupe() {
		return $this->groupe;
	}
	/**
	 * retourne le domaine de l'utilisateur
	 *
	 * @return string
	 */
	public function getdomaine() {
		return $this->domaine;
	}
	/**
	 * retourne la date de la consultation
	 *
	 * @return date
	 */
	public function getdate() {
		return $this->date;
	}
	/**
	 * retourne la fonction
	 *
	 * @return string
	 */
	public function getfonction() {
		return $this->fonction;
	}
	// setteurs
	/**
	 *
	 * Ins�re le titre de la consultation
	 *
	 * @param string $newValue
	 */
	public function settitle($newValue) {
		$this->title = $newValue;
	}
	/**
	 *
	 * Ins�re le nombre de consultation
	 *
	 * @param string $newValue
	 */
	public function setconsult($newValue) {
		$this->consult = $newValue;
	}
	/**
	 *
	 * Ins�re l'espace
	 *
	 * @param string $newValue
	 */
	public function setespace($newValue) {
		$this->espace = $newValue;
	}
	/**
	 *
	 * Ins�re le nom de l'utilisateur
	 *
	 * @param string $newValue
	 */
	public function setnom($newValue) {
		$this->nom = $newValue;
	}
	/**
	 * Ins�re le pr�nom de l'utilisateur
	 *
	 * @param string $newValue
	 */
	public function setprenom($newValue) {
		$this->prenom = $newValue;
	}
	/**
	 *
	 * Ins�re le groupe de l'utilisateur
	 *
	 * @param string $newValue
	 */
	public function setgroupe($newValue) {
		$this->groupe = $newValue;
	}
	/**
	 *
	 * Ins�re le domaine de l'utilisateur
	 *
	 * @param string $newValue
	 */
	public function setdomaine($newValue) {
		$this->domaine = $newValue;
	}
	/**
	 *
	 * Ins�re la date de la consultation
	 *
	 * @param date $newValue
	 */
	public function setdate($newValue) {
		$this->date = $newValue;
	}
	/**
	 *
	 * Ins�re la fonction de l'utilisateur
	 *
	 * @param string $newValue
	 */
	public function setfonction($newValue) {
		$this->fonction = $newValue;
	}
}
	