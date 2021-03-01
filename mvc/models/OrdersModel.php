<?php

    class OrdersModel extends BaseModel{

        public function getOrder($id){
            return $this->database->getSingleRow("SELECT * FROM orders WHERE order_id = '$id'");
        }

        public function getOrderBooks($id){
            return $this->database->getRows("SELECT * FROM order_books JOIN books ON book_id = ob_book_id WHERE ob_order_id = '$id'");
        }

        public function create($items,$name,$email,$address,$country){

            //Escape data
            $name = $this->database->escape($name);
            $email = $this->database->escape($email);
            $address = $this->database->escape($address);
            $country = $this->database->escape($country);

            if($name == '' || $email == '' || $address == '' || $country == ''){
                return false;
            }

            //Insert order into DB
            $order_id = $this->database->insert("INSERT INTO orders (order_name,order_email,order_address,order_country,order_status)
                                                 VALUES ('$name','$email','$address','$country','created')");

            $order_price = 0;
            $order_shipping = 0;

            //Insert order books into DB
            foreach($items as $book){
                $this->database->insert("INSERT INTO order_books (ob_order_id,ob_book_id,ob_price,ob_shipping)
                                         VALUES ($order_id,$book->book_id,$book->book_price,$book->book_shipping)");
                $order_price += $book->book_price;
                $order_shipping += $book->book_shipping;
            }

            //Update order prices
            $this->database->query("UPDATE orders SET order_price = '$order_price', order_shipping = '$order_shipping', order_total = '".($order_price+$order_shipping)."' WHERE order_id = '$order_id'");

            //Return inserted order id
            return $order_id;


        }


    }

?>
