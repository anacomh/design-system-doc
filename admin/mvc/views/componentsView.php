<header>
  <div class="page-header">
	<h1>Componentes</h1>
	<a href="<?php echo ADMIN_URL.'components/create/'; ?>" class="new-item">
		<i class="fa fa-plus-circle"></i> Novo
	</a>
  </div>
</header>

<div class="page-container">

	<table class="list-table">
		<tr>
			<th class="text-left">Título</th>
			<th class="text-left">Status</th>
			<!--   -->
			<th>Editar</th>
			<th>Apagar</th>
		</tr>

		<tr>
		<?php foreach($components as $component){ ?>
			<!-- Title -->
			<td class="text-left">
				<a href="<?php echo ADMIN_URL.'components/detail/'.$component->component_id; ?>">
					<?php echo $component->component_title; ?>
				</a>
			</td>
			<!-- Author-->
			<td class="text-left">
			<?php if( $component->component_status == 1 ){ ?>
					Finalizado
				<?php }else{ ?>

				<a href="" class="list-invisible">
					Rascunho
				</a>

				<?php } ?>
		
			</td>
			<!-- Status -->
			<!-- <td>

				<?php if( $component->component_visible == 1 ){ ?>
				<a href="" class="list-visible">
					<i class="fa fa-check"></i>
				</a>
				
				<?php }else{ ?>

				<a href="" class="list-invisible">
					<i class="fa fa-times"></i>
				</a>

				<?php } ?>

			</td> -->
			<!-- Edit -->
			<td>
				<a href="<?php echo ADMIN_URL.'components/detail/'.$component->component_id; ?>">
					<i class="fa fa-edit"></i>
				</a>
			</td>
			<!-- Trash -->
			<td>
				<a href="<?php echo ADMIN_URL.'components/trash/'.$component->component_id; ?>" class="delete-item">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		<?php } ?>

	</table>
</div>