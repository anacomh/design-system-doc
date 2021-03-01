<?php

    class BooksModel extends BaseModel{

        //Return all books from DB
        public function getAll(){
            return $this->database->getRows("SELECT * FROM books WHERE book_trash = 0 AND book_visible = 1");
        }

        //Return book detail
        public function getDetail($id){
            $id = $this->database->escape($id);
            return $this->database->getSingleRow("SELECT * FROM books WHERE book_trash = 0 AND book_visible = 1 AND book_id = '$id'");
        }

        //Return books to show on homepage
        public function getHomeBooks(){
            return $this->database->getRows("SELECT * FROM books WHERE book_trash = 0 AND book_visible = 1 AND book_featured = 0 LIMIT 0,6");
        }

        //Return featured books
        public function getFeatured(){
            return $this->database->getRows("SELECT * FROM books WHERE book_trash = 0 AND book_visible = 1 AND book_featured = 1 ");
        }

        //Return related books
        public function getRelated($id){
            $id = $this->database->escape($id);
            return $this->database->getRows("SELECT * FROM books WHERE book_trash = 0 AND book_visible = 1 AND book_id != '$id' LIMIT 0,3");
        }

    }

 ?>
