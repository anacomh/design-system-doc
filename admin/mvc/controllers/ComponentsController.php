<?php

    class ComponentsController extends BaseController{

        public function index(){
            //Load Components model
            $components_model = $this->loadModel('Components');
            //Send data to view
            $this->saveData( 'components' , $components_model->getAll() );
            // Load view
            $this->loadView('components');

        }

        public function detail(){
          //Load components model
          $components_model = $this->loadModel('Components');   
          //Send data to view
          $this->saveData( 'component' , $components_model->getDetail($this->id) );          
          
          //Load components view
            $this->loadView('componentsDetail');

        }

        public function create(){

            //Load books model
            $components_model = $this->loadModel('Components');
            //Create new book in DB
            $new_id = $components_model->create();
            //Redirect to detail page
            $this->redirect('components/detail/'.$new_id);
  
          }        

        public function update(){
            //Load books model
            $components_model = $this->loadModel('Components');
            //Update database
            $components_model->update($this->id,
                                $_POST['title'],
                                $_POST['status'],
                                $_POST['usage'],
                                $_POST['states'],
                                $_POST['anatomy'],
                                $_POST['guidelines'],
                              );
            //Redirect
            $this->redirect('components/detail/'.$this->id);
  
          }        
    }

 ?>