<?php
class ConseillerManager {
    
    private $id_conseiller;
    private $id_banque;
    private $nom;
    private $prenom;
    private $num_tel;
    private $adrs_mail;
   

    public function __construct($id_conseiller,$id_banque,$nom,$prenom,$num_tel,$adrs_mail) {
       
        $this->id_conseiller = $id_conseiller;
        $this->id_banque = $id_banque;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->num_tel = $num_tel;
        $this->adrs_mail = $adrs_mail;
      

    }




   
}
?>