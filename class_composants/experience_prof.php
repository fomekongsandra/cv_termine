<?php
    class experience_prof{

        public function __construct(public $poste,public $entreprise ,public $date_deb,public $date_fin,public $lien,public $realisation)
        {
            $this->poste=$poste;
            $this->entreprise=$entreprise;
            $this->date_deb=$date_deb;
            $this->date_fin=$date_fin;
            $this->lien=$lien;
            $this->realisation=$realisation;
        }
        public function get_experience_prof(){
            echo '<div class="profession">
            <p class="title">'.$this->poste.'- <span class="location">'.$this->entreprise.'</span></p>
            <p class="date_cursus_role"> <span class="date">De '.$this->date_deb.' a '.$this->date_fin.'-'.$this->lien.' </span><br> <span
                    class="cursus_role">'.$this->realisation.'
                </span> </p>
            <hr>
        </div>';
        }
       
}

?>