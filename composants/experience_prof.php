<?php 
$array_experience_prof=array(
     array("mission"=>"chef de projet technologiques " ,"entreprise"=>"@Ets.M DE M",
     "periode"=>"De juillet 2019 a ce jour -http//mdem.cm",
    "poste"=>"chef du projet annuaire-universel.cm de l'ART "),
    array("mission"=>"fondateur &DT " ,"entreprise"=>"-@Startup chickDev",
    "periode"=>"De juin 2015 a ce jour -http//chickdev.cm",
   "poste"=>"realisation de plusieurs sites web et applications web et mobiles "),
   array("mission"=>"Enseignant " ,"entreprise"=>"-@Institut universitaire de la cote",
   "periode"=>"De juin octobre 2011 a ce jour -http//istdi.net",
  "poste"=>"Analyse UML & MERISE,BD/SQL ORACLE &MYSQL,DEV, IOS & Android,   BI &Big Data Talennd DI & Hadoop,
  1<sup>ere</sup>, 2<sup>eme</sup> et 4<sup>eme</sup> annee "),
  array("mission"=>"Developpeur en chef " ,"entreprise"=>"-@Karyroual group",
  "periode"=>"De Mai 2013 a juin 2015 -http//khayroual.com",
 "poste"=>"realisation de multiples projets logiciels et  web,infographie "),
   
 array("mission"=>"responsable commercial " ,"entreprise"=>"-@BAO Sarl",
 "periode"=>"De Decembre 2012 a juin 2013    -http//bao.sarl.com",
"poste"=>"definition des strategies commerciales ,controle de quqlite ,suivi... "),
);

?>

<div class="header">
                <div class="header_information " >
                    <span><i class="fab fa-buromobelexperte fa-3x"></i></span>
                    <div class="header_info" style="margin-left: 10px;">
                        <h3 class="header_title">Experience professionnelle</h3>
                        <p class="header_subtitle lite_gray">Expertise en entreprise</p>
                    </div>
                </div>

                <div class="icon"><i class="fas fa-ellipsis-v fa-2x"></i></div>

            </div>
                <div class="contentScrol">

                <div class="professional_experience" >
                <?php 
            foreach($array_experience_prof as $expereience){
            ?>
            <div class="profession">
                <p class="title"> <?= $expereience['mission'] ?>- <span class="location"><?= $expereience['entreprise'] ?></span></p>&nbsp;
                <p class="date_cursus_role"> <span class="date"><?= $expereience['periode'] ?>- </span><br> <span
                        class="cursus_role"><?= $expereience['poste'] ?>
                    </span> </p>
                <hr>
            </div>

            <?php } ?>

                    <!-- <div class="profession">
                        <p class="title"> Chef des projets technologiques - <span class="location">@Ets. M DE M</span>
                        </p>
                        <p class="date">De juillet 2019 a ce jour - http://mdm.cm</p>
                        <p class="subtitle"> Chef du projet annuaire-universel.cm de l'ART;</p>
                        <hr>
                    </div>

                    <div class="profession">
                        <p class="title"> Fondateur & DT - <span class="location">@Startup ChickDev</span></p>
                        <p class="date">De juin 2015 a ce jour - http://chickdev.com</p>
                        <p class="subtitle"> Realisation de plusieurs sites web et applications web et mobiles </p>
                        <hr>
                    </div>

                    <div class="profession">
                        <p class="title"> Enseignant - <span class="location">@Institut Universitaire de la cote</span>
                        </p>
                        <p class="date">De Octobre 2011 a ce jour - http://istdi.net</p>
                        <p class="subtitle"> "Analyse. UML & MERISE"; "BD/SQL. ORACLE & MySQL";"Dev. iOS & Android"; "BI & BIG Data Talend DI & Hadoop". 1<sup>ere</sup>, 2<sup>eme</sup> et 4<sup>eme</sup> annee
                        </p>
                        <hr>
                    </div>

                    <div class="profession">
                        <p class="title"> Developpeur en chef - <span class="location">@Kayroual group</span></p>
                        <p class="date">De Mai 2013 a Juin 2015 - http://khayroual.com</p>
                        <p class="subtitle">Realisation de multiples projets logiciels et web, Infographie, ...</p>
                        <hr>
                    </div>

                    <div class="profession">
                        <p class="title"> Responsable commercial - <span class="location">@BAO Sarl</span></p>
                        <p class="date">De Decembre 2012 a Juin 2013 - http://bao-sarl.com</p>
                        <p class="subtitle">Definition des strategies commerciales, Controle de qualite, suivi, ...</p>
                    </div> -->
                </div>
                </div>