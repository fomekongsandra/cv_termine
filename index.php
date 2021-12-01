<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CV</title>
</head>

<body >
    <div class="container">

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

          require('composants/cursus_scolaire.php');
          ?>

        </section>
    </div>

</body>

</html>