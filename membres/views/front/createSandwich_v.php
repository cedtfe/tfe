<?php //var_dump($ingr); ?>
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
    <form action="<?php echo base_url().'panier'; ?>" method="post">
      <?php foreach($typeIngr as $ti => $t){ $count = 0;?>
        <row>
          <h2><?php echo $t->Name; ?></h2>

          <?php foreach($ingr as $in => $i){ ?>
            <?php if($i->idType_Ingredient == $t->idType_Ingredient){ ?>
              <?php switch($t->Name){
                      case 'Pain':
                        //radio button
                        ?>
                        <div class="col s4">
                          <div class="row">
                            <div class="col s12 ">
                              <div class="card">
                                <div class="card-image">
                                  <img class=" responsive-img" src="<?php echo img_url($i->URL); ?>">
                                </div>
                                <div class="card-action">
                                  <input name="<?php echo $t->Name; ?>" type="radio" id="test<?php echo $count; ?>" class="with-gap" value="<?php echo $i->idIngredient; ?>"/>
                                  <label for="test<?php echo $count; ?>"><?php echo $i->Name_ingr; ?></label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                        //echo $i->Name_ingr.'<br />';
                        break;
                      case 'Garniture':
                        //select
                        echo $i->Name_ingr.'<br />';
                        break;
                      case 'Sauce':
                        //select
                        echo $i->Name_ingr.'<br />';
                        break;
                      case 'Crudités':
                        //checkbox limité à 3
                        echo $i->Name_ingr.'<br />';
                        break;

              } $count += 1;?>
            <?php } ?>
          <?php } ?>
        </row>
      <?php } ?>

      <button class="btn waves-effect waves-light" type="submit" name="action">Commander
        <i class="material-icons right">send</i>
      </button>
    </form>
  </div>
</div>
