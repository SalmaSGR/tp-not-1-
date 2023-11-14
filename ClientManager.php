<?php
class ClientManager {
    
    private $id_c;
    private $nom;
    private $prenom;
    private $year_birthday;
    private $situation_familiale;
    private $adresse;
    private $num_tele;
    private $mail;

    public function __construct($id_c,$nom,$prenom,$year_birthday,$situation_familiale,$adresse,$num_tele,$mail) {
       
        $this->id_c = $id_c;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->year_birthday = $year_birthday;
        $this->situation_familiale = $situation_familiale;
        $this->adresse = $adresse;
        $this->num_tele = $num_tele;
        $this->mail = $mail;

    }

    public function __get($property)
    {
        return $this->$property;
    }



   
}
?>