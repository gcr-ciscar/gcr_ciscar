<?php
/**
 * Controleur des statistiques de l'application m�tier Site Emploi
 * @author Alexandre DIALLO
 * @package app-site-emploi
 * @subpackage statistiques
 * @version 1.0.4
 */
class StatControler {
	public function __construct() {
	}

	// ###
	/**
	 * $_GET['action']= ?
	 *
	 * 'cv_region'. R�partition des cv par r�gion et domaine
	 * 'offre_region'.r�partition des offres par r�gion et domaine
	 * 'rep'.r�partition des r�ponses par r�gion et domaine
	 * 'site_emploi'.consultation de chaque page
	 * 'consult_cv'.d�tail des consultation de la CVth�que
	 */
	public function run() {
		switch ($_GET ['action']) {
			/*
			 * case 'cv_date':
			 *
			 * $time = time();
			 * $aModele = new StatCVDate ();
			 * $aModele->SQL_SELECT_BY_DATE(isset($_GET['m'])?$_GET['m']:date('m',$time),isset($_GET['a'])?$_GET['a']:date('Y',$time));
			 * $aView = new StatCVDateView($aModele);
			 * $aView->renderHTML();
			 *
			 * break;
			 */

			case 'cv_region' :

				$time = time ();
				$aRegion = new StatListRegion ();
				$aRegion->SQL_SELECT_ALL ();
				$aDomaine = new StatListDomaine ();
				$aDomaine->SQL_SELECT_ALL ();
				$aStat = new StatCVRegion ();
				$aStat->SQL_SELECT_BY_REG ( isset ( $_GET ['m'] ) ? $_GET ['m'] : date ( 'm', $time ), isset ( $_GET ['a'] ) ? $_GET ['a'] : date ( 'Y', $time ) );
				$aView = new StatCVRegionView ( $aRegion, $aDomaine, $aStat->getList () );
				$aView->renderHTML ();

				break;

			case 'offre_date' :

				$time = time ();
				$aModele = new StatOffreDate ();
				$aModele->SQL_SELECT_BY_DATE ( isset ( $_GET ['m'] ) ? $_GET ['m'] : date ( 'm', $time ), isset ( $_GET ['a'] ) ? $_GET ['a'] : date ( 'Y', $time ) );
				$aView = new StatOffreDateView ( $aModele );
				$aView->renderHTML ();

				break;

			case 'offre_region' :

				$time = time ();
				$aRegion = new StatListRegion ();
				$aRegion->SQL_SELECT_ALL ();
				$aDomaine = new StatListDomaine ();
				$aDomaine->SQL_SELECT_ALL ();
				$aStat = new StatOffreRegion ();
				$aStat->SQL_SELECT_BY_REG ( isset ( $_GET ['m'] ) ? $_GET ['m'] : date ( 'm', $time ), isset ( $_GET ['a'] ) ? $_GET ['a'] : date ( 'Y', $time ) );
				$aView = new StatOffreRegionView ( $aRegion, $aDomaine, $aStat->getList () );
				$aView->renderHTML ();

				break;

			case 'rep' :

				$time = time ();
				$aRegion = new StatListRegion ();
				$aRegion->SQL_SELECT_ALL ();
				$aDomaine = new StatListDomaine ();
				$aDomaine->SQL_SELECT_ALL ();
				$aStat = new StatReponseRegion ();
				$aStat->SQL_SELECT_BY_REG ( isset ( $_GET ['m'] ) ? $_GET ['m'] : date ( 'm', $time ), isset ( $_GET ['a'] ) ? $_GET ['a'] : date ( 'Y', $time ) );
				$aView = new StatReponseRegionView ( $aRegion, $aDomaine, $aStat->getList () );
				$aView->renderHTML ();

				break;

			case 'site_emploi' :

				$time = time ();

				$aModele = new StatConsult ();
				$aModele->SQL_SELECT_CONSULT ( isset ( $_GET ['m'] ) ? $_GET ['m'] : date ( 'm', $time ), isset ( $_GET ['a'] ) ? $_GET ['a'] : date ( 'Y', $time ) );
				$aView = new StatConsultView ( $aModele );
				$aView->renderHTML ();

				break;

			case 'consult_cv' :
				$time = time ();
				$aModele = new StatConsultCV ();
				$aModele->SQL_SELECT_CONSULT_CV ( isset ( $_GET ['m'] ) ? $_GET ['m'] : date ( 'm', $time ), isset ( $_GET ['a'] ) ? $_GET ['a'] : date ( 'Y', $time ) );
				$aView = new StatConsultCVView ( $aModele );
				$aView->renderHTML ();

				break;
				break;
		}
	}
}
?>
