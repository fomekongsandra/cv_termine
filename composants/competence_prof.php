<?php 
$array_competence=array(
    array("performance"=>"developpement front-end", 
    "langage_manipule"=>"HTML5,SASS,VueJS,Angular,JavaFx",
    "niveau_competence"=>80),
    array("performance"=>"developpement back-end", 
    "langage_manipule"=>"NodeJs,Drupal 8,Laravel,Java EE 7",
    "niveau_competence"=>70),
    array("performance"=>"developpement mobile", 
    "langage_manipule"=>"Android Kotlin,IOS Swift,Cordova,Flutter",
    "niveau_competence"=>77),
    array("performance"=>"UI/UX Design", 
    "langage_manipule"=>"photoshop CC,Adobe XD,Material Design",
    "niveau_competence"=>60),
    array("performance"=>"Base de donnees & big data", 
    "langage_manipule"=>"Android Kotlin,IOS Swift,Cordova,Flutter",
    "niveau_competence"=>90),
    array("performance"=>"outils/Environnements", 
    "langage_manipule"=>"visual paradigm,Git,Docker,K8s,Linux",
    "niveau_competence"=>80),

    )

?>
<div class="">

    <?php 
    foreach($array_competence as $competence){
    ?>

    <div class="competence ">
        <input checked type="checkbox" class="check">
        <div class="details">
            <div class="skill">
                <h4><?=$competence["performance"]?></h4>
                <i class="fas fa-star" style="color: rgb(231, 36, 36); margin-top: 5px;"></i>
            </div>
            <p class="lite_gray"><?=$competence["langage_manipule"]?></p>
            <div class="niveau-competence">
                <div class="progress" style="width: <?=$competence['niveau_competence']?>%"><span class="rond" ></span></div>
            </div>
        </div>
    </div>

    <?php } ?>
<!-- 
    <div class="competence">
        <input checked type="checkbox" class="check">
        <div class="details">
            <div class="skill">
                <h4>Developpement back-end</h4>
                <i class="fas fa-star" style="color: rgb(231, 36, 36); margin-top: 5px;"></i>
            </div>
            <p class="lite_gray">NodeJS, Drupal 8, Laravel, Kotlin, Java EE 7</p>
            <div class="niveau-competence">
                <div class="progress p_70"><span class="rond"></span></div>
            </div>
        </div>
    </div>

    <div class="competence">
        <input checked type="checkbox" class="check">
        <div class="details">
            <div class="skill">
                <h4>Developpement mobile</h4>
                <i class="fas fa-star" style="color: rgb(231, 36, 36); margin-top: 5px;"></i>
            </div>
            <p class="lite_gray">Android Kotlin, IOS Swift, Cordova, Flutter</p>
            <div class="niveau-competence">
                <div class="progress p_84"><span class="rond"></span></div>
            </div>
        </div>
    </div>

    <div class="competence">
        <input checked type="checkbox" class="check">
        <div class="details">
            <div class="skill">
                <h4> UI / UX Design</h4>
                <i class="fas fa-star" style="color: rgb(231, 36, 36); margin-top: 5px;"></i>
            </div>
            <p class="lite_gray">Photoshop CC, Adobe XD, Material Design</p>
            <div class="niveau-competence">
                <div class="progress p_65"><span class="rond"></span></div>
            </div>
        </div>
    </div>

    <div class="competence">
        <input checked type="checkbox" class="check">
        <div class="details">
            <div class="skill">
                <h4>Base de donnees & Big Data</h4>
                <i class="fas fa-star" style="color: rgb(231, 36, 36); margin-top: 5px;"></i>
            </div>
            <p class="lite_gray">Oracle 11g, PostgreSQL, Hadoop, Talend DI</p>
            <div class="niveau-competence">
                <div class="progress p_94"><span class="rond"></span></div>
            </div>
        </div>
    </div>

    <div class="competence">
        <input checked type="checkbox" class="check">
        <div class="details">
            <div class="skill">

                <h4>Outils / Environnements</h4>
                <i class="fas fa-star" style="color: rgb(231, 36, 36); margin-top: 5px;"></i>
            </div>
            <p class="lite_gray">Visual Paradigm, Git, Docker, K8s, Linux</p>
            <div class="niveau-competence">
                <div class="progress p_85"><span class="rond"></span></div>
            </div>
        </div>
    </div> -->

</div>