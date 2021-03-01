<?php


    class View{

        public function __construct($template,$data){

            if( !file_exists("mvc/views/".$template."View.php") ){
                die("View $template does not exist.");
            }

            if(is_array($data)){
                extract($data);
            }

            include("mvc/views/headerView.php");
            include("mvc/views/".$template."View.php");
            include("mvc/views/footerView.php");


        }

    }



?>
