<?php 


include_once(SRC_MODELS."/Comptes_class.php");

class ComptBloque extends Comptes{
    private $_dateDeblocage;
    private $_fraisCompte;
    private $_solde;


    public function __construct($numCompte,$cleRib,$dateOuv,$idCl,$idResp,$idAgence,$idAgios,$solde,$fraisCompte,$dateDebloc){
        parent::__construct($numCompte,$cleRib,$dateOuv,$idCl,$idResp,$idAgence,$idAgios);
        $this->_dateDeblocage=$dateDebloc;
        $this->_fraisCompte=$fraisCompte;
        $this->_solde=$solde;
    }

    public function getFraisOuverture(){
        return $this->_fraisCompte;
    }

    public function getDateDeblocage(){
        return $this->_dateDeblocage;
    }

    public function getSolde(){
        return $this->_solde;
    }

    public function setSolde($solde){
        return $this->_solde=$solde;
    }

    public function getIdAgios(){
        return parent::getIdAgios();
    }

    public function getIdRespo(){
        return parent::getIdRespo();
    }

    public function getIdClient(){
        return parent::getIdClient();
    }

    public function getNumCompte(){
        return parent::getNumCompte();
    }

    public function getIdAgence(){
        return parent::getIdAgence();
    }

    public function getDateOuverture(){
        return parent::getDateOuvert();
    }

    public function getCleRib(){
        return parent::getCleRib();
    }





}
















?>