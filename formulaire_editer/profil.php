<?php 
    $profile= Data::get_data_profile();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body >
    <div class="bodyedit" id="modalprofil">
        <div class="wrapper" >
                <button type="button" class="close" id="editclose" style="border: none; height: 20px; width: 20px; border-radius: 50px; background-color: tomato;">
                    <span aria-hidden="true">&times;</span>
                </button>
            <div class="title">
                edit profile
            </div>
            <div class="photo">
                <div class="photo_profil">
        
                </div>
                <div class="photo_cou">
        
                </div>
            </div>
            <hr>
            <form action="" class="from ">
                <div class="user">
                    <div class="input_field">
                        <label for="" class="details">NOM:</label>
                        <input type="text"  placeholder="entrer votre nom" class="input" required value=" <?=$profile->get_nom_personne()?>">
                    </div>
                    <div class="input_field">
                        <label for="" class="details">PRENOM:</label>
                        <input type="text"  placeholder="entrer votre prenom" class="input" required value="<?=$profile->get_prenom_personne()?>">
                    </div>
                    <div class="input_field">
                        <label for="" class="details">ROLE:</label>
                        <input type="text"  placeholder="entrer votre tache" class="input" required value="<?=$profile->get_role()?>">
                    </div>
                    <div class="input_field">
                        <label for="" class="details">DATE DE NAISSANCE:</label>
                        <input type="date"  placeholder="entrer votre date naissance" class="input" required value="<?=$profile->get_date_naissance ()?>">
                    </div>
                    <div class="input_field">
                        <label for="" class="details">REGION:</label>
                        <input type="text"  placeholder="entrer votre region" class="input" required value="<?=$profile->get_origine()?>">
                    </div>
                    <div class="input_field">
                        <label for="" class="details">PAYS:</label>
                        <input type="text"  placeholder="entrer votre pays" class="input" required value="<?=$profile->get_pays()?>">
            
                    </div>
                    <div class="input_field" >
                        <label for="" class="details" >STATUT:</label>
                    
                        <select name="" id="" class="input" required value="<?=$profile->get_statut()?>">
                            <option value=""></option>
                            <option value="">celibataire</option>
                            <option value="">mariee</option>
            
                        </select>
            
                    
                    </div>
                    
                    <div class="input_field">
                        <label for="" class="details">NOMBRE D'ENFANT:</label>
                        <input type="text"  placeholder="entrer votre nom" class="input" required value="<?=$profile->get_pays()?>">
            
                    </div>
                    <div class="input_field">
                        <label for="" class="details">VILLE:</label>
                        <input type="text"  placeholder="entrer votre nom" class="input" required>
            
                    </div>
                    <div class="input_field">
                        <label for="" class="details">QUARTIER:</label>
                        <input type="text"  placeholder="entrer votre nom" class="input" required>
            
                    </div>
                    <div class="input_field">
                        <label for="" class="details">NUMERO:</label>
                        <input type="text"  placeholder="entrer votre numero" class="input" required>
            
                    </div>
                    <div class="input_field">
                        <label for="" class="details">EMAIL:</label>
                        <input type="mail"  placeholder="entrer votre mail" class="input" required value="">
            
                    </div>
                
                </div>
                <div class="dernier">
                    <input type="submit" value="enregistrer" style="width: 650px ; border-radius: 5px; height: 45px; font-size: 20px;" >
                </div>

                
            </form>
        </div>
    </div>
   <style>
       *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    .wrapper{
    height: 450px;
    overflow-y: scroll;
    }
    .wrapper::-webkit-scrollbar{
        width: 8px;
        /* background-color:#aaa; */
    }
    .wrapper::-webkit-scrollbar-thumb{
        background-color: #aaa;
        border-radius: 20px;
    }

    .wrapper::-webkit-scrollbar-track{
        background-color:#aaa; 
        border-radius: 10px;
        border-right: 3px solid  white;
        border-left: 3px solid  white;
        
    }
    .bodyedit{
        position: absolute;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        display: none;
        height: 800px;
        width: 90%;
        top: -1650px;
        /* background-color: rgba(51, 51, 51, 0.13); */
    }
    .bodyedit .wrapper{
        
        max-width: 700px;
        width: 100%;
        background:#fff;
        padding: 20px;
        border: 0.5px solid #aaa;
        transition: all 1s ease;
    }
    .bodyedit .wrapper .photo{
        display: flex;
        justify-content: space-evenly;
    }
    .bodyedit .wrapper .photo .photo_profil{
        /* border-radius: 60px; */
        margin-right: 5%;
        background: red;
        height: 60px;
        width: 60px;
        /* margin: 10px; */
    }
    .bodyedit .wrapper .photo .photo_cou{
        /* border-radius: 70px; */
        margin-right: 5%;
        background: red;
        height:60px;
        width:60px;
        /* margin: 10px;
        margin-left: 50%; */

        
    }
    .bodyedit .wrapper .title{
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        text-transform: uppercase;

    }
    .wrapper .from .user{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }
    .bodyedit .from .user .input_field{
        margin-bottom: 15px;
        width: calc(100% / 2 -20px);
        display: flex;
        flex-direction: column;
    
    }
    .bodyedit .user .input_field .input{
        height: 45px;
        width: 300px;
        padding-left: 10px;
        font-size: 16px;
        border-bottom-width:2px ;
        transition:  all 0.3s ease;
        border: none;
        border-bottom: 3px solid blue;
        background: transparent;
        outline: none;
        /* border-radius: 5px; */
        margin: 10px;
    }
    .bodyedit .user .input_field .input:focus{
        border: 2px solid dodgerblue;
    }
    .bodyedit .user .input_field .details{
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .bodyedit .wrapper .dernier{
        height: 45px;
        width: 500px;
        /* padding-left: 10px;
        font-size: 16px;
        border-bottom-width:2px ;
        transition:  all 0.3s ease;
        border: none;
        border-radius: 5px;
        margin: 10px; */
    }
   </style>
</body>
</html> 