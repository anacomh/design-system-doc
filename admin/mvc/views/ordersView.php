
	<div class="page-header">
		<div class="row">
			<div class="col col6 left">
				<h2 class="page-title">
					Encomendas
				</h2>
			</div>
			<div class="col col6 right text-right">

				<form action="<?php echo ADMIN_URL.'books/search'?>" method="GET" class="search-form">
					<label>Pesquisar</label>
					<input type="text" name="search" required/>
				</form>

			</div>
		</div>
	</div>


	<table class="list-table">
		<tr>
			<th class="text-left">ID</th>
			<th class="text-left">Data</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Ver</th>
		</tr>

		<?php foreach($orders as $order){?>
		<tr>
			<!-- ID -->
			<td class="text-left">
				<a href="">
					#<?php echo $order->order_id; ?>
				</a>
			</td>
			<!-- Data -->
			<td class="text-left">
				<?php echo $order->order_date; ?>
			</td>
			<!-- Nome -->
			<td>
				<?php echo $order->order_name; ?>
			</td>
			<!--Price -->
			<td>
				<?php echo $order->order_price; ?>€
			</td>
			<!-- See -->
			<td>
				<a href="<?php echo ADMIN_URL.'orders/detail/'.$order->order_id; ?>">
					<i class="fa fa-search-plus"></i>
				</a>
			</td>
		</tr>
		<?php } ?>

	</table>
