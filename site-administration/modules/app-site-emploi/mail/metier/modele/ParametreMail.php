<?php
/**
 * Class utilis�e pour la gestion des param�tres mail
 * @author Quentin BRISSON
 * @package app-site-emploi
 * @subpackage mail
 * @version 1.0.4
 *
 */
class ParametreMail {
	private $MailObjet;
	private $MailTete;
	private $MailPied;
	public function __construct() {
		$this->MailObjet = '';
		$this->MailTete = '';
		$this->Mailpied = '';
	}

	// ###

	/**
	 * R�cup�re l'objet du mail
	 */
	public function getMailObjet() {
		return $this->MailObjet;
	}
	/**
	 * R�cup�re l'ent�te du mail
	 */
	public function getMailTete() {
		return $this->MailTete;
	}
	/**
	 * R�cup�re le pied du mail
	 */
	public function getMailPied() {
		return $this->MailPied;
	}

	/**
	 * Ins�re l'objet du mail
	 */
	public function setMailObjet($newValue) {
		$this->MailObjet = $newValue;
	}
	/**
	 * Ins�re l'ent�te du mail
	 */
	public function setMailTete($newValue) {
		$this->MailTete = $newValue;
	}
	/**
	 * Ins�re le pied du mail
	 */
	public function setMailPied($newValue) {
		$this->MailPied = $newValue;
	}
}
?>