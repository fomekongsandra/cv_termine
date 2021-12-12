<?php
    class personne{

        public function __construct(public $id_personne ,public $nom_personne,public $prenom_personne, public $date_naissance,public $telephone,public $ville,public $pays,public $map,public $langue)

        {
            $this ->id_personne=$id_personne;
            $this->nom_personne=$nom_personne;
            $this->prenom_personne=$prenom_personne;
            $this->date_naissance=$date_naissance;
            $this->telephone=$telephone;
            $this->ville=$ville;
            $this->pays=$pays;
            $this->map=$map;
            $this->langue=$langue;
        }

        public function getid_personne(){
            return $this->id_personne;
        }
        public function get_nom_personne(){
            return $this->nom_personne;
        }
        public function get_prenom_personne(){
            return $this->prenom_personne;
        }
        public function get_date_naissance(){
            return $this->date_naissance;
        }
        public function get_telephone(){
            return $this->telephone;
        }
        public function get_ville(){
            return $this->ville;

        }
        public function get_pays(){
            return $this->pays;
        }
        public function get_map(){
            return $this->map;
        }

        public function editer()
    {

    }
        public function supprimer()

    {

    }
        public function envoyer()
        {

        }
    public function get_personne(){
        echo''
    }
    
}

    
?>