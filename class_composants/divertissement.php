<?php 
    class divertissement{

        public $image;

        public function __construct($image ){
            $this->image=$image;
        }

        public function get_divertissement(){
            echo '<img src=" '.$this->image.'"height="50" alt="">';
        }

    }
?>
       