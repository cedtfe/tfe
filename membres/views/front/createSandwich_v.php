<?php //var_dump($ingr);           ?>
<div class='container'>
    <div class='row'>
        <div class="col s12">
            <div class="card-panel teal">
                <span class="white-text">
                    <h2>Compose ton sandwich</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec purus velit. Sed tincidunt odio lectus, sit amet faucibus odio ultricies at. Donec tempus elit quis purus ullamcorper, quis aliquam leo tempus. </p>
                </span>
            </div>
        </div>
        <form action="<?php echo base_url() . 'panier'; ?>" method="post">
          <?php
            foreach ($typeIngr as $ti => $t) {
                $count = 0;
                ?>

                <h2><?php echo $t->Name; ?></h2>


                        <?php
                        switch ($t->Name) {
                            case 'Pain':
                                //radio button
                                ?>
                              <?php foreach ($ingr as $in => $i) { ?>
                                <?php if ($i->idType_Ingredient == $t->idType_Ingredient) { ?>
                                <div class="col s4">
                                    <div class="row">
                                        <div class="col s12 ">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img class=" responsive-img" src="<?php echo img_url($i->URL); ?>">
                                                </div>
                                                <div class="card-action">
                                                    <input name="<?php echo $t->Name; ?>" type="radio" id="test<?php echo $i->idIngredient; ?>" class="with-gap" value="<?php echo $i->idIngredient; ?>"/>
                                                    <label for="test<?php echo $i->idIngredient; ?>"><?php echo $i->Name_ingr; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <?php } } ?>
                                <?php
                                break;
                            case 'Garniture':
                                //select
                                ?>

                                <div class = "input-field col s12">
                                    <?php
                                    $array = [$count => $i->Name_ingr,];
                                    ?>
                                    <select>
                                        <option value = "" selected>Choisis ta garniture</option>
                                        <?php foreach ($ingr as $in => $i) { ?>
                                          <?php if ($i->idType_Ingredient == $t->idType_Ingredient) { ?>
                                        <option value = "<?php echo $i->idIngredient; ?>"><?php echo $i->Name_ingr; ?></option>
                                        <?php } } ?>
                                    </select>

                                </div>
                                <?php
                                break;
                            case 'Sauce':
                                //select
                                ?>

                                <div class = "input-field col s12">
                                    <select>
                                       <option value = "" selected>Choisis ta sauce</option>
                                       <?php foreach ($ingr as $in => $i) { ?>
                                         <?php if ($i->idType_Ingredient == $t->idType_Ingredient) { ?>
                                        <option value = "<?php echo $i->idIngredient; ?>"><?php echo $i->Name_ingr; ?></option>
                                      <?php } } ?>
                                    </select>
                                </div>
                                <?php
                                break;
                            case 'Crudités':
                                //checkbox limité à 3
                                ?>

                                  <?php foreach ($ingr as $in => $i) { ?>
                                    <?php if ($i->idType_Ingredient == $t->idType_Ingredient) { ?>
                                  <p>
                                    <input type="checkbox" id="<?php echo $i->idIngredient; ?>" />
                                    <label for="<?php echo $i->idIngredient; ?>"><?php echo $i->Name_ingr; ?></label>
                                  </p>
                                  <?php } } ?>

                                <?php
                                break;
                        } $count += 1;
                        ?>

<?php } ?>
            <br> <br>
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Confirmer<i class="material-icons right">send</i></a>
            <button class="btn waves-effect waves-light" type="submit" name="action" id="confirmer" style="display:none;">Confirmer

            </button>
        </form>
    </div>
</div>
<!-- Modal Trigger -->


<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" id="ajouter">Ajouter</a>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" id="commander">Commander</a>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('select').material_select();
    $('.modal').modal();
  });
</script>
