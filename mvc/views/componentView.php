

  <header>
  <div class="component-header">
    <h1><?php echo $component->component_title; ?></h1>
    <?php if ( $component->component_status == 1) { ?>
    <span class="pilula finalizado">Finalizado</span>
    <?php } else { ?>
      <span class="pilula rascunho">Rascunho</span>
    <?php } ?>
  </div>
  <!-- Tab links -->
  <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'usage')"  id="defaultOpen">Uso</button>
        <button class="tablinks" onclick="openCity(event, 'states')">Estados</button>
        <button class="tablinks" onclick="openCity(event, 'anatomy')">Anatomia e Estilos</button>
        <button class="tablinks" onclick="openCity(event, 'guidelines')">Guidelines</button>
    </div>
</header>
<div class="container">
    <div class="row">


        <!-- Tab content -->
        <div id="usage" class="tabcontent">
            <?php echo $component->component_usage; ?>
        </div>

        <div id="states" class="tabcontent">
            <?php echo $component->component_states; ?>
        </div>

        <div id="anatomy" class="tabcontent">
            <?php echo $component->component_anatomy; ?>
        </div>

        <div id="guidelines" class="tabcontent">
            <?php echo $component->component_guidelines; ?>
        </div>

    </div>
    <a class="ghost" href="<?php echo ADMIN_URL.'components/detail/'.$component->component_id; ?>">Editar</a>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>