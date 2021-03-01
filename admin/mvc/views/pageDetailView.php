
	<div class="page-header">
		<h2 class="page-title">
			Página: {title}
		</h2>
	</div>

	<div class="page-container">

		<form action="" method="POST" enctype="multipart/form-data" class="editor-form">

			<label>Título</label>
			<input type="text" name="title" value="" />

			<label>Lead</label>
			<input type="text" name="lead" value="" />

			<label>Texto</label>
			<textarea name="text" id="text-editor"></textarea>

			<input type="submit" value="Guardar"/>

		</form>


	</div>


	<!-- Include and initialize CKeditor-->
	<script src="<?php echo ADMIN_JS.'ckeditor/ckeditor.js'; ?>"></script>
	<script>CKEDITOR.replace('text-editor');</script>
