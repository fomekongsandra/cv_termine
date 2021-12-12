<?php
$array_information= array(
    new personne( 
    "fomekong ","sandra",
    "nee le 20 septembre 2000",
    " l'ouest cameroun ",
    "celibataire ,0 enfants .sante RAS",
" bonamoussadi",
    "pays"=>"Douala-Cameroun ",
    "map"=>" 4.053276, 9.765047",
"photo_profil"=>"petitephoto.jpg",
"photo_couverture"=>"photocouverture.jpg",
"numero_telephone"=>"695728775",
"reseau_sociaux"=>"Mobile, Telegram, Whatsapp",
"email"=>"fomekongsandra2@gmail.com",
"social_media"=>"Google+, Twitte, LinkedIn, Github",
"nbre_projet"=>"+45projets",
"conctats"=>"+31conctats",
"annee_exp"=>"12 ans exp");
    


?>


<div class="partie_profil">
            <div class="photo_couverture" style="background-image: linear-gradient(rgba(0, 0, 255, 0.575),rgba(0, 0, 255, 0.418)),url('<?=$array_information['photo_couverture']?>');"></div>

                <div class="navigation">

                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>

                    <input type="text" name="" placeholder="Besoin d'un chef de ? " id="" class="search">

                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>

                    <span class="divider"></span>
                    <span style="font-size: 20px; margin-right: 20px; font-weight: bold;">X</span>

                </div>
               
                <div class="header-img" style="margin-top: 35px;">
                    <img src="<?=$array_information['photo_profil']?>" alt="" style="margin-left: 40px; border-radius: 40px;">
                <div class="name-cv" style="margin-left: 20px;">
                        <span class="nom" style="font-size: 25px;"><b><?=$array_information['nom']?></b></span><br>
                        <span style="color: #aaa;">Architecte logiciel / DevOps</span>
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
                 <!-- <form action="" class="alert">
                     <label for="email">email;</label>
                     <input type="text" placeholder="entrer votre email">
                     <label for="objet"> objet:</label>
                     <input type="text" placeholder="entrer votre objet">

                 </form> -->
                        
                 
              </div>
                  
                  <div class="groupe_information_personnelle">
                    <div class="info_personnelle">
                        <i class="fas fa-birthday-cake fa-3x"></i>
                        <div class="anniv">
                          
                            <p>Née le 20 septembre 2000</p>
                            <p>Originaire de l'ouest Cameroun</p>
                            <p>Celibataire , 0 enfants . Sante RAS</p><br>
                            <hr>
                        </div>
                    </div>
                    <div class="info_personnelle">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                        <div class="anniv">
                            <p>Resident à <?=$array_information['quartier']?> </p>
                            <p><?=$array_information['pays']?></p>
                            <p>Map: <span class="gray"> <?=$array_information['map']?></span>
                            </p><br>
                            <hr>
                        </div>

                    </div>
                    <div class="info_personnelle">
                        <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                        <div class="anniv">
                            <p>(237) <?=$array_information['numero_telephone']?></p>
                            <p class="gray"><?=$array_information['reseau_sociaux']?></p><br>
                            <hr>
                        </div>

                    </div>
                    <div class="info_personnelle">
                        <i class="fas fa-envelope fa-3x"></i>
                        <div class="anniv">
                            <p><?=$array_information['email']?></p>
                            <p class="gray"><?=$array_information['social_media']?></p><br>
                        </div>

                    </div>
                </div>

                <div class="indice_experience">
                    <div>
                        <h5><?=$array_information['nbre_projet']?></h5>
                        <span class="active"></span>
                    </div>
                    <div>
                        <h5 class="gray"><?=$array_information['conctats']?></h5>
                        <span></span>
                    </div>
                    <div>
                        <h5 class="gray"> <?=$array_information['annee_exp']?></h5>
                        <span></span>
                    </div>
                </div>

                <!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black; font-size: 20px;">Partager par mail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  style="height: 100%;">
                <form method="post" action="composants/envoiemail.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label" style="color: black; font-weight:bold;font-style:10px;">Email:</label>
                        <input type="email" class="form-control" id="receptionEmail" name="receptionEmail" style="width: 95%;" placeholder="exemple@gmail.com..." required>

                        <div class="modal-footer" style="display: flex; justify-content:space-between">
                            <button type="reset" class="btn btn-secondary" style="background-color: blue;">Annuler</button>
                            <button type="submit" name="sendEmailButton" class="btn btn-primary" >Envoyer</button>
                        </div>
                        <footer>
                            <div><i class="fas fa-file-pdf fa-5x" style="color: brown;"></i></div>
                        </footer>
                       
                    </div>
                </form>
           </div>
        </div>
    </div>
</div>


            <script>
                let btnplus =document.getElementById("btnplus");
                btnplus.addEventListener('click',affiche,false);
                let btnfois =document.getElementById("btnfois");
                btnfois.addEventListener('click',fermer,false);

                let plus=document.getElementById("plus");
               

                function affiche(){

                    plus.style.display="block";
                    btnplus.style.display="none";
                    btnfois.style.display="block";
                }
                function fermer(){
                    plus.style.display="none";
                    btnfois.style.display="none";
                    btnplus.style.display="block";
                }
            </script>
            </div>    