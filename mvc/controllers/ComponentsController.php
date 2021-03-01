<?php

    class ComponentsController extends BaseController{

        //Default action
        public function index(){
            $components_model = $this->loadModel('Components');
            //Send data to view
            $this->saveData('componentitem' , $components_model->getComponents() );
            // //Load view
            $this->loadView('component');            
        }


        //Detail action
        public function detail(){

            //Load model
            $components_model = $this->loadModel('Components');
            $header_model = $this->loadModel('Header');

            $this->saveData('component', $components_model->getDetail($this->id) );
            $this->saveData('menu', $header_model->getAll() );
            //Send data to view
            
            //Load View
            $this->loadView('component');
        }

    }


 ?>