<?php
$array_diverti=array( 
   new divertissement ("img/photo_7.jpg"),
  new divertissement ("img/photo_9.jpg"),
  new divertissement("img/photo1.jpg"),
new divertissement("img/photo_8.jpg"),
new divertissement("img/photo4.jpg"),
new divertissement("img/photo_5.jpg"),
new divertissement("img/photo_6.jpg"),
);
?>
<div class="divertissement">
            <div class="interest_point card">
                    <h3>Points d'interets</h3>
                    <p class="header_subtitle"> Simple passe temps pour se faire un peu plaisir </p>
                    <div class="logo_divertissement">
                        <?php foreach($array_diverti as $diverti){
                            $diverti->get_divertissement()
                        ?> 
                      
                        <?php } ?>
<!--                         
                        <img src="img/photo_9.jpg" style="height: 30px; width: 70px;" alt="">
                        <img src="img/photo1.jpg"  style="height: 50px; width: 50px;" alt="">
                    
                        <img src="img/photo_8.jpg" style="height: 50px;" alt="">
                        <img src="img/photo4.jpg" style="height: 40px;" alt="">
                        <img src="img/photo_5.jpg" alt="">
                        <img src="img/photo_6.jpg" style="height: 40px;" alt=""> -->
                    </div>

            </div>

            <div class=" language card">
                    <h3>Langue</h3>
                    <p class="header_subtitle"> Pratiquees en entreprise </p>
                    <div class="language_check">
                        <input class="check" type="checkbox" checked>
                        <label for="">Francais</label>
                    </div>
                    <div class="language_check">
                        <input class="check" type="checkbox" checked>
                        <label for="">Anglais</label>
                    </div>
            </div>

</div>