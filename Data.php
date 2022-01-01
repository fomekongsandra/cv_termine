<?php 
    class Data{
        public static function get_data_profile(){
            
            $profile=new personne( 
                "fomekong ","sandra",
                "Architecte logiciel/Devops",
                "nee le 20 septembre 2000",
                " l'ouest cameroun ",
                "celibataire ,0 enfants .sante RAS",
            " bonamoussadi",
                "Douala","Cameroun ",
                " 4.053276, 9.765047",
            "../petitephoto.jpg",
            "../photocouverture.jpg",
            "695728775",
            "Mobile, Telegram, Whatsapp",
            "fomekongsandra2@gmail.com",
            "Google+, Twitte, LinkedIn, Github",
            "+45projets",
            "+31conctats",
            "12 ans exp");
           return $profile;
        }

    }

?>