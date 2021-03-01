<?php

    class BooksController extends BaseController{

        //Default action
        public function index(){
            //Load books model
            $books_model = $this->loadModel('Books');
            //Send data to view
            $this->saveData( 'books' , $books_model->getAll() );
            //Load view
            $this->loadView('books');
        }

        //Search books
        public function search(){

            if(isset($_POST['search'])){

              //Load books model
              $books_model = $this->loadModel('Books');
              //Send data to view
              $this->saveData( 'books' , $books_model->search( $_POST['search'] ) );

            }else{

              $this->redirect('books');

            }

            $this->loadView('books');

        }

        //Edit book detail
        public function detail(){
          //Load books model
          $books_model = $this->loadModel('Books');
          //Send data to view
          $this->saveData( 'book' , $books_model->getDetail($this->id) );
          //Load View
          $this->loadView('bookDetail');
        }

        public function hide(){
          //Load books model
          $books_model = $this->loadModel('Books');
          //update database
          $books_model->hide( $this->id );
          //Redirect
          $this->redirect('books');
        }

        public function show(){
          //Load books model
          $books_model = $this->loadModel('Books');
          //update database
          $books_model->show( $this->id );
          //Redirect
          $this->redirect('books');
        }

        public function trash(){
          //Load books model
          $books_model = $this->loadModel('Books');
          //update database
          $books_model->trash( $this->id );
          //Redirect
          $this->redirect('books');
        }

        public function create(){

          //Load books model
          $books_model = $this->loadModel('Books');
          //Create new book in DB
          $new_id = $books_model->create();
          //Redirect to detail page
          $this->redirect('books/detail/'.$new_id);

        }


        public function update(){
          //Load books model
          $books_model = $this->loadModel('Books');
          //Update database
          $books_model->update($this->id,
                              $_POST['title'],
                              $_POST['author'],
                              $_POST['lead'],
                              $_POST['text'],
                              $_POST['price'],
                              $_POST['shipping'],
                              $_FILES['image']
                            );
          //Redirect
          $this->redirect('books/detail/'.$this->id);

        }

    }


 ?>
