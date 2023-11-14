<?php
class LigneCompteManager {
    private $id_ligne;
    private $id_cpt;
    private $date_de_tran;
    private $montant;
    private $description;

    public function __construct($id_ligne,$id_cpt,$date_de_tran,$montant,$description) {
        $this->id_ligne = $id_ligne;
        $this->id_cpt = $id_cpt;
        $this->date_de_tran = $date_de_tran;
        $this->montant = $montant;
        $this->description = $description;
    }

   
}
?>
