
	<div class="page-header">
		<div class="row">
			<div class="col col6 left">
				<h2 class="page-title">
					Livros
				</h2>
			</div>
			<div class="col col6 right text-right">

				<a href="<?php echo ADMIN_URL.'books/create/'; ?>" class="new-item">
					<i class="fa fa-plus-circle"></i> Novo
				</a>


				<form action="<?php echo ADMIN_URL.'books/search'?>" method="POST" class="search-form">
					<label>Pesquisar</label>
					<input type="text" name="search" required/>
				</form>

			</div>
		</div>
	</div>


	<table class="list-table">
		<tr>
			<th class="text-left">Título</th>
			<th class="text-left">Autor</th>
			<th>Publicar</th>
			<th>Editar</th>
			<th>Apagar</th>
		</tr>

		<?php foreach($books as $book){ ?>
		<tr>
			<!-- Title -->
			<td class="text-left">
				<a href="<?php echo ADMIN_URL.'books/detail/'.$book->book_id; ?>">
					<?php echo $book->book_title; ?>
				</a>
			</td>
			<!-- Author-->
			<td class="text-left">
				<?php echo $book->book_author; ?>
			</td>
			<!-- Status -->
			<td>

				<?php if( $book->book_visible == 1 ){ ?>

				<a href="<?php echo ADMIN_URL.'books/hide/'.$book->book_id; ?>" class="list-visible">
					<i class="fa fa-check"></i>
				</a>

				<?php }else{ ?>

				<a href="<?php echo ADMIN_URL.'books/show/'.$book->book_id; ?>" class="list-invisible">
					<i class="fa fa-times"></i>
				</a>

				<?php } ?>

			</td>
			<!-- Edit -->
			<td>
				<a href="<?php echo ADMIN_URL.'books/detail/'.$book->book_id; ?>">
					<i class="fa fa-edit"></i>
				</a>
			</td>
			<!-- Trash -->
			<td>
				<a href="<?php echo ADMIN_URL.'books/trash/'.$book->book_id; ?>" class="delete-item">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		<?php } ?>

	</table>
