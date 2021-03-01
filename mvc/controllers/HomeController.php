<?php

    class HomeController extends BaseController{

        //Default action
        public function index(){
            $header_model = $this->loadModel('Components');
            //Send data to view
            $this->saveData('menu', $header_model->getComponents() );

            //Load View
            $this->loadView('home');

        }

    }


 ?>
