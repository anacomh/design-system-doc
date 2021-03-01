<?php

    class BooksModel extends BaseModel{

        public function getAll(){
          return $this->database->getRows("SELECT * FROM books
                                           WHERE book_trash = 0");
        }

        public function search( $keyword ){
          return $this->database->getRows("SELECT * FROM books
                                           WHERE
                                           (
                                           book_title LIKE '%$keyword%'
                                           OR
                                           book_author LIKE '%$keyword%'
                                           )
                                           AND
                                           book_trash = 0
                                           ");
        }

        public function getDetail($id){
          return $this->database->getSingleRow("SELECT * FROM books
                                                WHERE book_id = '$id' ");
        }

        public function trash($id){
          $this->database->query("UPDATE books SET book_trash = 1
                                  WHERE book_id = '$id' ");
        }

        public function hide($id){
          $this->database->query("UPDATE books SET book_visible = 0
                                  WHERE book_id = '$id' ");
        }

        public function show($id){
          $this->database->query("UPDATE books SET book_visible = 1
                                  WHERE book_id = '$id' ");
        }


        public function update($id,$title,$author,$lead,$text,$price,$shipping,$image){

          //Upload image
          if( $image['error'] == 0 ){

            $image_name = '';
            //File temporary name
            $temp_name = $image['tmp_name'];
            //Get file extension
          	$file_parts = explode( '.', $image['name'] );
          	$file_extension = strtolower( $file_parts[ count($file_parts) - 1 ] );
            //Create random name
            $image_name = 'image'.$id.rand(0,99999).'.'.$file_extension;
            //Move file
            move_uploaded_file($temp_name,'../static/media/'.$image_name);
            //Update database
            $this->database->query("UPDATE books
                                    SET book_image = '$image_name'
                                    WHERE book_id = '$id' ");
          }

          //Update Database
          $this->database->query("UPDATE books SET
                                 book_title = '$title',
                                 book_author = '$author',
                                 book_lead = '$lead',
                                 book_text = '$text',
                                 book_price = '$price',
                                 book_shipping = '$shipping'
                                 WHERE
                                 book_id = '$id'
                                 ");
        }

        //Insert new record into Database
        public function create(){
          $new_id = $this->database->insert("INSERT INTO books VALUES ()");
          return $new_id;
        }


    }

 ?>
