<?php

    class BaseController{

        protected $controller;
        protected $action;
        protected $id;
        protected $params;

        private $database;
        protected $cart;
        private $view;
        private $data;

        //Class constructor
        public function __construct($controller,$action,$id,$params){

            //Assign parameters
            $this->controller = $controller;
            $this->action = $action;
            $this->id = $id;
            $this->params = $params;

            //Start session
            session_start();

            //Create database object
            $this->database = new Database();

            //Create cart Model
            $this->cart = $this->LoadModel('Cart');
            $this->saveData('cart_count', $this->cart->getCount() );

            //Execute action
            $this->action($this->action);

        }

        private function checkPermission(){
            if( !$this->user->isAuth() && $this->controller != 'Login' ){
              $this->redirect('login');
            }
          }
          
        //Execute action
        private function action($action_name){

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
        protected function loadView($template){
            new View( $template ,  $this->data );
        }

        //Redirect application
        protected function redirect($path){
            header('location:'.BASE_URL.$path);
        }

    }



?>
