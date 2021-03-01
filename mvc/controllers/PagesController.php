<?php

    class PagesController extends BaseController{

        //Default action
        public function index(){

        }

        //About action
        public function about(){

            //Load Model
            $pages_model = $this->loadModel('pages');
            //Save data to View
            $this->saveData('content', $pages_model->getDetail(1) );
            //Load view
            $this->loadView('about');

        }

        //Contacts action
        public function contacts(){

            //Load Model
            $pages_model = $this->loadModel('pages');
            //Save data to View
            $this->saveData('content', $pages_model->getDetail(2) );
            //Load view
            $this->loadView('contacts');

        }

        //Send Message action
        public function sendMessage(){

            //Load Model
            $pages_model = $this->loadModel('pages');
            //Save Message
            if(isset($_POST['name'])){
                $return_message = $pages_model->saveMessage($_POST['name'],$_POST['email'],$_POST['message']);
            }
            //Redirect
            $this->redirect('pages/contacts/');

        }

    }


 ?>
