<?php

    class ComponentsController extends BaseController{

        //Default action
        public function index(){
            $this->loadView('component');
        }

        //Detail action
        public function detail(){

            // //Load model
            // $components_model = $this->loadModel('Components');

            // //Save data to View
            // $this->saveData('component', $component_model->getDetail($this->id) );

            //Load View
            $this->loadView('component');
        }

    }


 ?>
