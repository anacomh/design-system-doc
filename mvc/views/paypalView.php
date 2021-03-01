

	<div class="container">

        <div id="paypal_connect">Connecting to Paypal</div>

        <form action="<?php echo PAYPAL_SUBMIT_URL; ?>" method="POST" id="paypal-form">

                <!-- BASIC CONFIG -->
            	<input type="hidden" name="business" value="<?php echo PAYPAL_EMAIL; ?>">
            	<input type="hidden" name="cmd" value="_cart">
            	<input type="hidden" name="upload" value="1">
           		<input type="hidden" name="currency_code" value="EUR">
                <input type="hidden" name="charset" value="utf-8">

                <!-- USER INFO -->
                <input type="hidden" name="email" value="<?php echo $order->order_email; ?>">
                <input type="hidden" name="address1" value="<?php echo $order->order_address; ?>">
                <input type="hidden" name="country" value="<?php echo $order->order_country; ?>">

                <!-- URLS -->
                <input type="hidden" name="notify_url" value="<?php echo BASE_URL.'paypal/notify/'.$order->order_id; ?>">
				<input type="hidden" name="return" value="<?php echo BASE_URL."paypal/return/";?>">
                <input type="hidden" name="cancel_return" value="<?php echo BASE_URL."cart/";?>">

				<!-- Products -->
				<?php  $count = 1; foreach($items as $item){?>
                <input type="hidden" name="item_name_<?php echo $count;?>" value="<?php echo $item->book_title; ?>">
                <input type="hidden" name="quantity_<?php echo $count;?>" value="1">
                <input type="hidden" name="amount_<?php echo $count;?>" value="<?php echo $item->book_price; ?>">
                <input type="hidden" name="shipping_<?php echo $count; ?>" value="<?php echo $item->book_shipping; ?>" />
            	<?php $count++; }?>


       	</form>

		<script>
			//Auto submit form to Paypal
			document.getElementById("paypal-form").submit();
		</script>


   	</div>
