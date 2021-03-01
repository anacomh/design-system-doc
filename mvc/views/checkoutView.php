
	<div class="container page_article">

        <div class="clear">
        	<h1 class="book_title left">Checkout</h1>
        </div>

        <div class="row">
        	<div class="col col6 left">
                <div id="checkout_form">
                    <form method="post" action="<?php echo BASE_URL.'cart/order/'?>">

                        <input type="text" name="name" class="cart_input" placeholder="Name" required/>
                        <input type="email" name="email" class="cart_input" placeholder="Email" required/>
                        <input type="text" name="address" class="cart_input" placeholder="Address" required/>
                        <input type="text" name="country" class="cart_input" placeholder="Country" required/>

                        <input type="submit" class="checkout_submit" value="Proceed to Payment" />

                    </form>
        		</div>
            </div>
            <div class="col col6 right">
                <div class="cart_total">
                    <div>Price: <span>€ <?php echo $price; ?></span></div>
                    <div>Shipping: <span>€ <?php echo $shipping; ?></span></div>
                    <div class="total_price">Total: <span>€ <?php echo $total; ?></span></div>
                </div>
			</div>

		</div>

	</div>
