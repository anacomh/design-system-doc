<header>
  <div class="page-header">
	<h1>Editar componente</h1>
	</a>
  </div>
</header>

	<div class="page-container">
		<form action="<?php echo ADMIN_URL.'components/update/'.$component->component_id; ?>" method="POST" enctype="multipart/form-data" class="editor-form">

			<label>Título</label>
			<input type="text" name="title" value="<?php echo $component->component_title; ?>" />

			<label>Status</label>
			<?php if ( $component->component_status == 1) { ?>
			<div class="radio">
				<input type="radio" name="status" value="1" checked>
				<label for="finalizado">Finalizado</label>
			</div>

			<?php } else { ?>
			<div class="radio">
				<input type="radio" name="status" value="1">
				<label for="finalizado">Finalizado</label>
			</div>
			<?php } ?>

			<?php if ( $component->component_status == 2) { ?>
			<div class="radio">
				<input type="radio" name="status" value="2" checked>
				<label for="rascunho">Rascunho</label>
			</div>
			<?php } else { ?>
			<div class="radio">
				<input type="radio" name="status" value="2">
				<label for="rascunho">Rascunho</label>
			</div>
			<?php } ?>

			<div class="divider"></div>

			<label>Uso</label>
			<textarea name="usage" id="text-editor-1"><?php echo $component->component_usage; ?></textarea>

			<div class="divider"></div>
			<label>Estados</label>
			<textarea name="states" id="text-editor-2"><?php echo $component->component_states; ?></textarea>

			<div class="divider"></div>
			<label>Anatomia e Estilos</label>
			<textarea name="anatomy" id="text-editor-3"><?php echo $component->component_anatomy; ?></textarea>

			<div class="divider"></div>
			<label>Guidelines</label>
			<textarea name="guidelines" id="text-editor-4"><?php echo $component->component_guidelines; ?></textarea>			

			<input class="primary" type="submit" value="Salvar"/> <a class="ghost" href="<?php echo BASE_URL.'components/detail/'.$component->component_id; ?>">Ver publicação</a>
		</form>


	</div>

	<style>
	.radio{position:relative;}
	.radio label{position:absolute;top:-13px;left:30px;}
	
	</style>

	<!-- Include and initialize CKeditor-->
	<script src="<?php echo ADMIN_JS.'ckeditor/ckeditor.js'; ?>"></script>
	<script>CKEDITOR.replace('text-editor-1');</script>
	<script>CKEDITOR.replace('text-editor-2');</script>
	<script>CKEDITOR.replace('text-editor-3');</script>
	<script>CKEDITOR.replace('text-editor-4');</script>
