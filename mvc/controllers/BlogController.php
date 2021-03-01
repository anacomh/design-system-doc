<?php

    class BlogController extends BaseController{

        //Default action
        public function index(){

            //Load model
            $books_model = $this->loadModel('Blog');

            //Save data to View
            $this->saveData('posts', $books_model->getAll() );

            //Load View
            $this->loadView('blog');

        }

        //Detail action
        public function detail(){

            //Load model
            $books_model = $this->loadModel('Blog');

            //Save data to View
            $this->saveData('post', $books_model->getDetail($this->id) );
            $this->saveData('related', $books_model->getRelated($this->id) );

            //Load View
            $this->loadView('post');
        }

    }


 ?>
