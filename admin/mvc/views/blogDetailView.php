
	<div class="page-header">
		<h2 class="page-title">
			Blog
		</h2>
	</div>

	<div class="page-container">

		<form action="" method="POST" enctype="multipart/form-data" class="editor-form">

			<label>Título</label>
			<input type="text" name="title" value="" />

			<label>Data</label>
			<input type="text" name="date" value="" data-toggle="datepicker" readonly/>

			<label>Lead</label>
			<input type="text" name="lead" value="" />

			<label>Texto</label>
			<textarea name="text" id="text-editor"></textarea>

			<label>Imagem</label>

			<img src="" class="input-image"/>

			<input type="file" name="image"/>

			<input type="submit" value="Guardar"/>

		</form>


	</div>


	<!-- Include and initialize CKeditor-->
	<script src="<?php echo ADMIN_JS.'ckeditor/ckeditor.js'; ?>"></script>
	<script>CKEDITOR.replace('text-editor');</script>
