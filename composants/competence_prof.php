<?php 
$array_competence=array(
    new competence("developpement front-end",80,"HTML5,SASS,VueJS,Angular,JavaFx"),

    new competence("developpement back-end",70,"NodeJs,Drupal 8,Laravel,Java EE 7"),

    new competence("developpement mobile",77,"Android Kotlin,IOS Swift,Cordova,Flutter"),

    new competence("UI/UX Design",60 ,"photoshop CC,Adobe XD,Material Design"),

   new competence ("Base de donnees & big data",90,"Android Kotlin,IOS Swift,Cordova,Flutter"),

    new competence ("outils/Environnements",80,"visual paradigm,Git,Docker,K8s,Linux"),

    )

?>

<div class="">

    <?php 
    foreach($array_competence as $competence){
        $competence->get_competence();
    ?>


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
    </div> 
-->

</div>