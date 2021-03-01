<?php

    class BooksController extends BaseController{

        //Default action
        public function index(){

            //Load model
            $books_model = $this->loadModel('Books');

            //Save data to View
            $this->saveData('books', $books_model->getAll() );

            //Load View
            $this->loadView('books');

        }

        //Detail action
        public function detail(){

            //Load model
            $books_model = $this->loadModel('Books');

            //Save data to View
            $this->saveData('book', $books_model->getDetail($this->id) );
            $this->saveData('related', $books_model->getRelated($this->id) );

            //Load View
            $this->loadView('book');
        }

    }


 ?>
