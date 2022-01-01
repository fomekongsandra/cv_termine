<body>

<?php
    class personne{

        public function __construct(public $nom_personne,public $prenom_personne, public $role,public $date_naissance,public $origine,public $statut,public $quartier
        ,public $ville,public $pays,public $map,public $photo_profil,public $photo_couverture,public $telephone,public $reseaux_sociaux,
    public $email,public $sociaux_media,public $nbre_projet,public $contrat,public $annee_exp)

        {

            $this->nom_personne=$nom_personne;
            $this->prenom_personne=$prenom_personne;
            $this->role=$role;
            $this->date_naissance=$date_naissance;
            $this->origine=$origine ;
            $this->statut=$statut;
            $this->quartier=$quartier;
            $this->ville=$ville;
            $this->pays=$pays;
            $this->map=$map;
            $this->photo_profil=$photo_profil;
            $this->photo_couverture=$photo_couverture;
            $this->telephone=$telephone;
            $this->reseaux_sociaux=$reseaux_sociaux;
            $this ->email=$email;
            $this->sociaux_media=$sociaux_media;
            $this->nbre_projet=$nbre_projet;
            $this ->contrat= $contrat;
            $this->annee_exp=$annee_exp;


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
        public function get_role(){
            return $this->role;
        }
        public function get_date_naissance(){
            return $this->date_naissance;
        }
        public function get_origine(){
            return $this->origine;
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
        echo'
        <div class="partie_profil">
        <div class="photo_couverture" style="background-image: linear-gradient(rgba(0, 0, 255, 0.575),rgba(0, 0, 255, 0.418)),url('.$this->photo_couverture.')"></div>

            <div class="navigation">

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>

                <input type="text" name="" placeholder="Besoin d\'un chef de ? " id="" class="search">

                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>

                <span class="divider"></span>
                <span style="font-size: 20px; margin-right: 20px; font-weight: bold;">X</span>
                <button class="buton_editer" id="openEdit">
                <i class="fas fa-pencil fa-2x " style="color: #fff;" ></i>
            </button>
            
            </div>
           
           
            <div class="header-img" style="margin-top: 35px;">
                <img src='.$this->photo_profil.' alt="" style="margin-left: 40px; border-radius: 40px;">
            <div class="name-cv" style="margin-left: 20px;">
                    <span class="nom" style="font-size: 25px;"><b>'.$this->nom_personne.'-'.$this->prenom_personne.'</b></span><br>
                    <span style="color: #aaa;">'.$this->role.'</span>
            </div>
          
        </div>

      

</div>
<div class="information_personnelle">
          <div class="dropdown">
             <div class="btn_plus"  id="btn" ><i class="fas fa-plus fa-3x" id="btnplus" ></i>
             <i class="fas fa-times fa-3x" id="btnfois" style="display: none;"></i>
             </div>

             <div class="btnsend" id="plus">
                    <a class="awe"><i class="fas fa-arrow-circle-down fa-2x" style="text-decoration:none; color:#fff;" ></i></a><br> 
                    <a data-bs-toggle="modal" data-bs-target="#myModal" class="awi"><i class="fas fa-share-alt-square fa-2x"  style="text-decoration: none;color:#fff;"></i> </a><br> 
                    <a id="btn_editer" class="awu"><i class="fas fa-pencil fa-2x" style="text-decoration: none;color:#fff;"></i></i></a><br> 
              </div>  
                                 
             
          </div>
              
              <div class="groupe_information_personnelle">
                <div class="info_personnelle">
                    <i class="fas fa-birthday-cake fa-3x"></i>
                    <div class="anniv">
                      
                        <p>'.$this->date_naissance.'</p>
                        <p>'.$this->origine.'</p>
                        <p>'.$this->statut.'<br>
                        <hr>
                    </div>
                </div>
                <div class="info_personnelle">
                    <i class="fas fa-map-marker-alt fa-3x"></i>
                    <div class="anniv">
                        <p>Resident à '.$this->quartier.'</p>
                        <p>'.$this->ville.'-'.$this->pays.'</p>
                        <p>Map:'.$this->map.'</span>
                        </p><br>
                        <hr>
                    </div>

                </div>
                <div class="info_personnelle">
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <div class="anniv">
                        <p>(237) '.$this->telephone.'</p>
                        <p class="gray">'.$this->reseaux_sociaux.'</p><br>
                        <hr>
                    </div>

                </div>
                <div class="info_personnelle">
                    <i class="fas fa-envelope fa-3x"></i>
                    <div class="anniv">
                        <p>'.$this->email.'</p>
                        <p class="gray">'.$this->sociaux_media.'</p><br>
                    </div>

                </div>
            </div>

            <div class="indice_experience">
                <div>
                    <h5>'.$this->nbre_projet.'</h5>
                    <span class="active"></span>
                </div>
                <div>
                    <h5 class="gray">'.$this->contrat.'</h5>
                    <span></span>
                </div>
                <div>
                    <h5 class="gray">'.$this->annee_exp .'</h5>
                    <span></span>
                </div>
            </div>
        
        ';
    }
}

    
?>
<script>

</script>
</body>
