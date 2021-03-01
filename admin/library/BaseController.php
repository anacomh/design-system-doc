<?php

    class BaseController{

        protected $controller;
        protected $action;
        protected $id;
        protected $params;
        protected $database;
        protected $user;
        protected $view;
        private $data = array();

        //Class constructor
        public function __construct($controller,$action,$id,$params){

            //Assign parameters
            $this->controller = $controller;
            $this->action = $action;
            $this->id = $id;
            $this->params = $params;

            //Create database object
            $this->database = new Database();

            //Create User object
            $this->user = new User($this->database);

            //Check user permission
            $this->checkPermission();

            //Execute action
            $this->action();

        }

        private function checkPermission(){
          if( !$this->user->isAuth() && $this->controller != 'Login' ){
            $this->redirect('login');
          }
        }

        //Execute action
        private function action(){

            $action_name = $this->action;

            //Check if controller method exists
            if( !method_exists($this,$action_name) ){
                die('Method '.$action_name.' is not defined');
            }

            //Execute controller method
            $this->$action_name();

        }

        //Load Model
        protected function loadModel($model){

            $model_class = $model.'Model';

            if(!class_exists($model_class)){
                die("Model $model_class does not exist.");
            }

            return new $model_class($this->database);

        }

        //Add data
        protected function saveData($key,$value){
            $this->data[$key] = $value;
        }

        //Output View
        protected function loadView($template, $header = true){
            new View( $template ,  $this->data, $header );
        }

        //Redirect application URL
        protected function redirect($path){
            header('location:'.ADMIN_URL.$path);
        }


    }



?>
