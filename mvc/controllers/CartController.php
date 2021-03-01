<?php

    class CartController extends BaseController{

        //Default action
        public function index(){

            //Save data to View
            $this->saveData('items', $this->cart->getItems() );
            $this->saveData('price', $this->cart->getPrice() );
            $this->saveData('shipping', $this->cart->getShipping() );
            $this->saveData('total', $this->cart->getTotal() );

            //Load View
            $this->loadView('cart');

        }

        //Add item to cart
        public function add(){
            $_SESSION['cart'][] = $this->id;
            $this->redirect('cart');
        }

        //Remove item from cart
        public function remove(){
            unset($_SESSION['cart'][$this->id]);
            $this->redirect('cart');
        }

        //checkout
        public function checkout(){

            //Save data to View
            $this->saveData('items', $this->cart->getItems() );
            $this->saveData('price', $this->cart->getPrice() );
            $this->saveData('shipping', $this->cart->getShipping() );
            $this->saveData('total', $this->cart->getTotal() );

            //Load View
            $this->loadView('checkout');
        }

        public function order(){

            if(!isset($_POST['name'])){
                return;
            }

            //Get order data
            $items = $this->cart->getItems();
            //Create orders model
            $order_model = $this->loadModel('Orders');
            //Create new order
            $order_id = $order_model->create($items,$_POST['name'],$_POST['email'],$_POST['address'],$_POST['country']);

            if(!$order_id){
                die("Error while creating order.");
            }

            //Redirect
            $this->redirect('cart/paypal/'.$order_id);


        }


        public function paypal(){

            //Create orders model
            $order_model = $this->loadModel('Orders');
            //Send data to View
            $this->saveData('order',$order_model->getOrder($this->id));
            $this->saveData('items',$order_model->getOrderBooks($this->id));

            

            //Load View
            $this->loadView('paypal');

        }

    }


 ?>
