<?php
    class experience_aca{
        public function __construct( public $diplome,public $ecole,public $annee_obt,public $aquisition)
        {
           
            $this->diplome=$diplome;
            $this->ecole=$ecole;
            $this->annee_obt=$annee_obt;
            $this->aquisition=$aquisition;
        }
        public function get_experience_aca(){
            echo' <div class="profession">
            <p class="title">'.$this->diplome.'- <span class="location">'.$this->ecole.'</span></p>
            <p class="date_cursus_role"> <span class="date">'.$this->annee_obt.'- </span> <span
                    class="cursus_role">'.$this->aquisition.'
                </span> </p>
            <hr>
        </div>';

    }
  }
?>