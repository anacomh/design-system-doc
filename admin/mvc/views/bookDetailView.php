
	<div class="page-header">
		<h2 class="page-title">
			Livros
		</h2>
	</div>

	<div class="page-container">

		<form action="<?php echo ADMIN_URL.'books/update/'.$book->book_id; ?>" method="POST" enctype="multipart/form-data" class="editor-form">

			<label>Título</label>
			<input type="text" name="title" value="<?php echo $book->book_title; ?>" />

			<label>Autor</label>
			<input type="text" name="author" value="<?php echo $book->book_author; ?>" />

			<label>Lead</label>
			<input type="text" name="lead" value="<?php echo $book->book_lead; ?>" />

			<label>Texto</label>
			<textarea name="text" id="text-editor"><?php echo $book->book_text; ?></textarea>

			<label>Preço</label>
			<input type="text" name="price" value="<?php echo $book->book_price; ?>" class="price-input"/>€

			<label>Portes de envio</label>
			<input type="text" name="shipping" value="<?php echo $book->book_shipping; ?>" class="price-input"/>€

			<label>Imagem</label>

			<img src="<?php echo MEDIA_URL.$book->book_image; ?>" class="input-image"/>

			<input type="file" name="image"/>

			<input type="submit" value="Guardar"/>

		</form>


	</div>


	<!-- Include and initialize CKeditor-->
	<script src="<?php echo ADMIN_JS.'ckeditor/ckeditor.js'; ?>"></script>
	<script>CKEDITOR.replace('text-editor');</script>
