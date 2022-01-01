<?php 
require 'class_composants/personne.php' ;
require 'class_composants/competence.php';
require 'class_composants/experience_aca.php';
require 'class_composants/experience_prof.php';
require 'class_composants/divertissement.php';

require 'Data.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="style.css">

    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js" defer></script>

    <title>CV</title>
</head>


<body >
    <div class="container ">
        

        <!-- BLOC  du GAUCHE_HAUT -->
        <section class="section_1">
            <?php
           require('composants/profils.php');

            ?>
        </section>



        <!---- BLOCK GAUCHE_BAS ---->
        <section class="section_2 card">

           <?php require('composants/competence_prof.php') ;?>
        </section>


        <!----  BLOCK DROIT  ----->
        
        <section class="right_side card">
        <?php require('composants/experience_prof.php');
            

           require('composants/divertissement.php');

          require('composants/experience_aca.php');
          ?>

        </section>
        <section class="section_2 card">

           <?php require('formulaire_editer/profil.php') ;?>
        </section>
    </div>

</body>
<script>
                
                    let btn_editer=document.getElementById("btn_editer");
                    let openEdit = document.getElementById('openEdit');
                    let edit = document.getElementById("modalprofil");
                    btn_editer.addEventListener('click',affiche,false);
                    let closeed = document.getElementById("editclose");
                    closeed.addEventListener('click', closeEdt, false);

                    openEdit.addEventListener('click', openEdt, false);
                    function affiche(){
                        document.querySelector(".container").classList.toggle("editer")
                    }
                    function fermer(){
                        
                    }
                    function openEdt(){
                    edit.style.display = "block";
                 }
                 function closeEdt(){
                    edit.style.display = "none";
                 }
                </script>    

</html>