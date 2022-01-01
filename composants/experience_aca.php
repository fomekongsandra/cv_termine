<?php
$array_cursus=array(
     new experience_aca("DIPET 2 Electronique " ,"@ENSET de Douala","Aout 2016","Gestion d'eclairage d'une maison(Android + Arduino)"),
new experience_aca( "Oracle Certified Associate " ,"@Kentnix Sarl","Mars 2009",
"Oracle Database 11g Administration "),
new experience_aca("Oracle SQL Certified " ,"@Kentnix Sarl","Decembre 2008",
"SQL 2, SQL 3, XML"),
new experience_aca("Licence professionnelle" ,"@Douala Institute of Tech","Octobre 2008 ",
"Telecommunication & reseau"),

new experience_aca("DEC / BTS " ,"@CCNB Dieppe - Canada.","Septembre 2007 ",
"programmation appliquee pour internet"),
new experience_aca("baccalaureat","@Lycee technique  de Douala Bassa","juin 2005","Electrtechnique,mention BIEN(major de centre)"));
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
        <button class="buton_editer">
                  <i class="fas fa-pencil fa-2x " style="color: #fff;"></i>
        </button>
        <div class="icon"><i class="fas fa-ellipsis-v fa-2x"></i></div>

    </div>
    <div class="contentScrol">
        <div class="curcus_academique">

            <?php 
            foreach($array_cursus as $cursus){
                $cursus->get_experience_aca()
            ?>
            

            <?php } ?>

        </div>
    </div>
</div>
</div>