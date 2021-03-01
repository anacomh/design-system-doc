<?php


    class User{

        private $database;
        private $auth;
        private $details;

        //Constructor
        public function __construct($database){

            $this->database = $database;

            $this->checkAuth();

        }

        //Login Try
        public function login($username,$password){

            $username = $this->database->escape($username);
            $password = hash('sha256',$this->database->escape($password));

            $user = $this->database->getSingleRow("SELECT * FROM users WHERE user_username = '$username' AND user_password = '$password' ");

            if( count($user) > 0 ){
                $_SESSION['admin-username'] = $user->user_username;
                return true;
            }else{
                return false;
            }


        }

        //Check if user is authenticated
        private function checkAuth(){
            if(isset($_SESSION['admin-username'])){
                $this->auth =  true;
                $this->fetchUserDetails();
            }else{
                $this->auth = false;
            }
        }

        //Return if user is authenticated
        public function isAuth(){
            return $this->auth;
        }

        //Get user details from DB
        private function fetchUserDetails(){
            $this->details = $this->database->getSingleRow("SELECT * FROM users WHERE user_username = '".$_SESSION['admin-username']."'");
        }

        //Get user getDetails
        public function getDetails(){
            return $this->details;
        }

        //Log user out
        public function logout(){
          unset($_SESSION['admin-username']);
        }


    }



?>
