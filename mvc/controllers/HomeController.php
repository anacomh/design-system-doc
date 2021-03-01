<?php

    class HomeController extends BaseController{

        //Default action
        public function index(){

            //Load models
            $components_model = $this->loadModel('Components');

            //Save data to View
            $this->saveData('components', $components_model->getComponents() );

            //Load View
            $this->loadView('home');

        }

    }


 ?>
