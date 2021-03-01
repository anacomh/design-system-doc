<?php

    class MessagesController extends BaseController{

        public function index(){

            $this->loadView('messages');

        }

        public function detail(){

            $this->loadView('messagesDetail');

        }

    }


 ?>
