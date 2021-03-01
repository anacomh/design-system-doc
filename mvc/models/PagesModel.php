<?php

    class PagesModel extends BaseModel{


        //Return page detail
        public function getDetail($id){

            $id = $this->database->escape($id);

            return $this->database->getSingleRow("SELECT * FROM pages WHERE page_id = '$id'");
        }

        //Save Message
        public function saveMessage($name,$email,$message){

            if($name == '' || $email == '' || $message == ''){
                return "Please fill out all form fields.";
            }

            $name = $this->database->escape($name);
            $email = $this->database->escape($email);
            $message = $this->database->escape($message);

            $this->database->query("INSERT INTO messages (message_name, message_email, message_text) VALUES ('$name','$email','$message')");

            return "Your message was sent successfully.";

        }


    }

 ?>
