<?php


    class View{

        public function __construct($template,$data,$header=true){

            if( !file_exists("mvc/views/".$template."View.php") ){
                die("View $template does not exist.");
            }

            extract($data);

            if($header){
                include("mvc/views/headerView.php");
                include("mvc/views/".$template."View.php");
                include("mvc/views/footerView.php");
            }else{
                include("mvc/views/".$template."View.php");
            }


        }

    }



?>
