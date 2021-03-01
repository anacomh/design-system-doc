<?php


    class LoginController extends BaseController{

        public function index(){

            $this->loadView('login',false);

        }

        public function login(){

          $username = $_POST['username'];
          $password = $_POST['password'];

          if( $this->user->login($username,$password) == true ){
            $this->redirect('');
          }else{
            $this->redirect('login');
          }

        }

        public function logout(){

            $this->user->logout();
            $this->redirect('login');

        }

    }



 ?>
