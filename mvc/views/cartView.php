
	<div class="container page_article">

        <div class="clear">
        	<h1 class="book_title left">Shopping cart</h1>
        	<a href="<?php echo BASE_URL.'cart/checkout/'?>" class="checkout_btn">Proceed to checkout »</a>
        </div>

        <?php foreach($items as $key=>$item){ ?>
        <article class="cart_item">
            <div class="row">
            	<div class="col col2 left">
                	<div class="cart_image">
                    	<img src="<?php echo MEDIA_URL.$item->book_image; ?>" class="cart_image"/>
                	</div>
                </div>
                <div class="col col8 left">
                    <header class="cart_info">
                        <h1><?php echo $item->book_title; ?></h1>
                        <p>
                        	<?php echo $item->book_lead; ?>
                        </p>
                    </header>
                </div>
                <div class="col col2 left">
                    <div class="cart_specs">
                       	<div class="cart_price">€<?php echo $item->book_price; ?></div>
                        <div class="cart_shipment">+ €<?php echo $item->book_shipping; ?> (shipping)</div>
                        <a href="<?php echo BASE_URL.'cart/remove/'.$key; ?>" class="remove_cart">remove</a>
                    </div>
                </div>
        	</div>
        </article>
		<?php } ?>

        <div class="cart_total">
        	<div>Price: <span>€<?php echo $price; ?></span></div>
            <div>Shipping: <span>€<?php echo $shipping; ?></span></div>
        	<div class="total_price">Total: <span>€<?php echo $total; ?></span></div>
        </div>

   	</div>
