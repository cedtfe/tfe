<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lrdlg
{

  // fonction de var_dump avec les balises <pre></pre>
  public function pre($data){
    echo '<pre>';
		var_dump($data);
		echo '</pre>';
  }

}
