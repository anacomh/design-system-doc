
	<div class="page-header">
		<h2 class="page-title">
			Encomenda
		</h2>
	</div>

	<div class="page-container">

		<div class="detail-title">
			ID
		</div>
		<div class="detail-value">
			#<?php echo $order->order_id; ?>
		</div>

		<div class="detail-title">
			Date
		</div>
		<div class="detail-value">
			<?php echo $order->order_date; ?>
		</div>

		<div class="detail-title">
			Nome
		</div>
		<div class="detail-value">
			<?php echo $order->order_name; ?>
		</div>

		<div class="detail-title">
			Email
		</div>
		<div class="detail-value">
			<?php echo $order->order_email; ?>
		</div>

		<div class="detail-title">
			Address
		</div>
		<div class="detail-value">
			<?php echo $order->order_address; ?>
		</div>

		<div class="detail-title">
			Country
		</div>
		<div class="detail-value">
			<?php echo $order->order_country; ?>
		</div>

		<div class="detail-title">
			Products
		</div>
		<div class="row">

			<?php foreach($books as $book){?>
			<div class="col col2 left">
				<div class="order-product">
					<img src="<?php echo MEDIA_URL.$book->book_image; ?>">
					<div class="order-product-info">
						<div class="order-product-title">
							<?php echo $book->book_title; ?>
						</div>
						<div>
							Price: <?php echo $book->ob_price; ?>€
						</div>
						<div>
							Shipment: <?php echo $book->ob_shipping; ?>€
						</div>
					</div>
				</div>
			</div>
			<?php } ?>


		</div>

		<div class="detail-title">
			Price:<?php echo $order->order_price; ?>€
		</div>
		<div class="detail-title">
			Shipment: <?php echo $order->order_shipping; ?>€
		</div>
		<div class="detail-title">
			Total: <?php echo $order->order_price + $order->order_shipping; ?>€
		</div>


	</div>


	<!-- Include and initialize CKeditor-->
	<script src="<?php echo ADMIN_JS.'ckeditor/ckeditor.js'; ?>"></script>
	<script>CKEDITOR.replace('text-editor');</script>
