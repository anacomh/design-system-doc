<?php

    class CartModel extends BaseModel{

        private $price = 0;
        private $shipping = 0;

        public function getCount(){
            if(isset($_SESSION['cart'])){
                return count($_SESSION['cart']);
            }else{
                return 0;
            }
        }

        public function getItems(){

            $items = array();

            if( isset($_SESSION['cart']) && is_array($_SESSION['cart']) ){
                foreach($_SESSION['cart'] as $key=>$id){
                    $items[$key] = $this->database->getSingleRow("SELECT * FROM books WHERE book_id = '$id' AND book_trash = 0 AND book_visible = 1");
                    $this->price += $items[$key]->book_price;
                    $this->shipping += $items[$key]->book_shipping;
                }
            }

            return $items;

        }

        public function getPrice(){
            return number_format($this->price,2);
        }

        public function getShipping(){
            return number_format($this->shipping,2);
        }

        public function getTotal(){
            return number_format($this->price + $this->shipping,2);
        }



    }

?>
