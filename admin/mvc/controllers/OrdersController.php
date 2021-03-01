<?php

    class OrdersController extends BaseController{

        public function index(){

            $order_model = $this->loadModel('Orders');

            $this->saveData( 'orders' , $order_model->getAll() );

            $this->loadView('orders');

        }

        public function detail(){

            $order_model = $this->loadModel('Orders');
            $this->saveData( 'order' , $order_model->getDetail($this->id) );
            $this->saveData( 'books' , $order_model->getOrderBooks($this->id) );

            $this->loadView('ordersDetail');

        }

    }


 ?>
