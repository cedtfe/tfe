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
/* =============================================================================
	name : 				Lrdlg
	description : Boite à outils de développement de leradiologue
	author : 			leradiologue
	création : 		2017-07-28
	modifier le : 2017-07-28
	url : 				http://www.lrdlg.eu
============================================================================= */
