<?php
$array_cursus=array(
     array("diplome"=>"DIPET 2 Electronique " ,"ecole"=>"@ENSET de Douala","annee_obtention"=>"Aout 2016",
"acquisition"=>"Gestion d'eclairage d'une maison(Android + Arduino)"),
array("diplome"=>"  Oracle Certified Associate " ,"ecole"=>"@Kentnix Sarl","annee_obtention"=>"Mars 2009","acquisition"=>
"Oracle Database 11g Administration "),
array("diplome"=> "   Oracle SQL Certified " ,"ecole"=>"@Kentnix Sarl","annee_obtention"=>"Decembre",
"acquisition"=>"SQL 2, SQL 3, XML"),
array("diplome"=> "Licence professionnelle" ,"ecole"=>"@Douala Institute of Tech","annee_obtention"=>"Octobre 2008 ",
"acquisition"=>"Telecommunication & reseau"),
array("diplome"=> "  DEC / BTS " ,"ecole"=>"@CCNB Dieppe - Canada.","annee_obtention"=>"Septembre 2007 ",
"acquisition"=>"Electrotechnique, mention bien major"));
?>


<div class="cursus card">

    <div class="header">
        <div class="header_information">
            <span><i class="fas fa-graduation-cap fa-3x"></i></span>
            <div class="header_info" style="margin-left: 10px;">
                <h3 class="header_title">Cursus academique</h3>
                <p class="header_subtitle lite_gray">Diplomes et formations certifiantes</p>
            </div>
        </div>

        <div class="icon"><i class="fas fa-ellipsis-v fa-2x"></i></div>

    </div>
    <div class="contentScrol">
        <div class="curcus_academique">

            <?php 
            foreach($array_cursus as $cursus){
            ?>
            <div class="profession">
                <p class="title"> <?= $cursus['diplome'] ?>- <span class="location"><?= $cursus['ecole'] ?></span></p>
                <p class="date_cursus_role"> <span class="date"><?= $cursus['annee_obtention'] ?>- </span> &nbsp; <span
                        class="cursus_role"><?= $cursus['acquisition'] ?>
                    </span> </p>
                <hr>
            </div>

            <?php } ?>

        </div>
    </div>
</div>
</div>