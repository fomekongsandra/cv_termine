<?php 
class competence{

    public function __construct(public $nom_competence, public $niveaux_comp,public $langage_mani)
    {
        $this->nom_competence=$nom_competence;
        $this->niveaux_comp=$niveaux_comp;
        $this->langage_mani=$langage_mani;
    }

    public function get_competence(){
        echo '
        <div class="competence ">
            <input checked type="checkbox" class="check">
            <div class="details">
                <div class="skill">
                    <h4>'.$this->nom_competence.'</h4>
                    <i class="fas fa-star" style="color: rgb(231, 36, 36); margin-top: 5px;"></i>
                </div>
                <p class="lite_gray">'.$this->langage_mani.'</p>
                <div class="niveau-competence">
                    <div class="progress" style="width: '.$this->niveaux_comp.'%"><span class="rond" ></span></div>
                </div>
            </div>
        </div>';
    }

}
?>

  