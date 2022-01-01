<?php
$array_personne=  Data::get_data_profile();


?>

<?php 

    $array_personne->get_personne();

?>



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
                       
                       
                 
                    </div>
                </form>
                <form method="post" action="composants/download.php">
                           <button name="pdf" class="fas fa-file-pdf fa-5x" style="color: brown;"></button> 
                </form>
                        
               
           </div>
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

