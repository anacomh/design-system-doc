
	<div class="page-header">
		<div class="row">
			<div class="col col6 left">
				<h2 class="page-title">
					Mensagens
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
			<th class="text-left">Data</th>
			<th>Nome</th>
			<th>Assunto</th>
			<th>Ver</th>
		</tr>

		<!-- ROW 1 -->
		<tr>
			<!-- Data -->
			<td class="text-left">
				2017-01-01
			</td>
			<!-- Nome -->
			<td>
				John Doe
			</td>
			<!-- Assunto -->
			<td>
				Lorem Ipsum dolor
			</td>
			<!-- See -->
			<td>
				<a href="">
					<i class="fa fa-search-plus"></i>
				</a>
			</td>
		</tr>
		<!--END ROW 1 -->

	</table>
