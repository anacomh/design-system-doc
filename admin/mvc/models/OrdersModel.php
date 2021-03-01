<?php

    class OrdersModel extends BaseModel{

        public function getAll(){
          return $this->database->getRows("SELECT * FROM orders
                                           ORDER BY order_date DESC");
        }

        public function search(){

        }

        public function getDetail($id){
          return $this->database->getSingleRow("SELECT * FROM orders
                                               WHERE order_id = '$id' ");
        }

        public function getOrderBooks($id){

          return $this->database->getRows("
          SELECT * FROM
            books
          JOIN
            order_books
          ON
            book_id = ob_book_id
          WHERE
            ob_order_id = '$id'
          ");

        }


    }

 ?>
