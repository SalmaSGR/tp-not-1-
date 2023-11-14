<?php
class BanqueManager {
    
    private $id_banque;
    private $adrs;
    private $nom;
    private $phone;
    

    public function __construct($id_banque,$adrs,$nom,$phone) {
       
        $this->id_banque = $id_banque;
        $this->adrs = $adrs;
        $this->nom = $nom;
        $this->phone = $phone;
        

    }




   
}
?>