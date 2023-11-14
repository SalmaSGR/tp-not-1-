<?php
class CompteBancaireManager {
    private $pdo;
    private $id_cpt;
    private $id_c;
    private $date_douverture;
    private $solde;
    private $type;

    public function __construct( $id_cpt,$id_c,$date_douverture,$solde,$type) {
        $this->id_cpt = $id_cpt;
        $this->id_c = $id_c;
        $this->date_douverture = $date_douverture;
        $this->solde = $solde;
        $this->type = $type;
    }

}
?>
