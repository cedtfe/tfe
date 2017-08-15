<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
	private $CI;
	private $var = array();
	private $theme = 'default';

/*
|===============================================================================
| Constructeur
|===============================================================================
*/

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->var['output'] = '';

		//	Le titre est composé du nom de la méthode et du nom du contrôleur
		//	La fonction ucfirst permet d'ajouter une majuscule
		$this->var['titre'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());

		//	Nous initialisons la variable $charset avec la même valeur que
		//	la clé de configuration initialisée dans le fichier config.php
		$this->var['charset'] = $this->CI->config->item('charset');

		// Nous initialisons les variable $css et $js
		$this->var['css'] = array();
		$this->var['js'] = array();
	}

/*
|===============================================================================
| Méthodes pour charger les vues
|	. view
|	. views
|===============================================================================
*/

	public function view($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);

		$this->CI->load->view('../themes/' . $this->theme, $this->var);
		
	}

	public function views($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		return $this;
	}

	public function viewL($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);

		$this->CI->load->view('../themes/' . $this->theme, $this->var);
	}

	public function viewsL($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		return $this;
	}

/*
|===============================================================================
| Méthodes pour modifier les variables envoyées au layout
|	. set_titre
|	. set_charset
|===============================================================================
*/
	public function set_titre($titre)
	{
		if(is_string($titre) AND !empty($titre))
		{
			$this->var['titre'] = $titre;
			return true;
		}
		return false;
	}

	public function set_charset($charset)
	{
		if(is_string($charset) AND !empty($charset))
		{
			$this->var['charset'] = $charset;
			return true;
		}
		return false;
	}

	public function set_urlfcbk($url)
	{
		if(is_string($url) AND !empty($url))
		{
			$this->var['urlfcbk'] = $url;
			return true;
		}
		return false;
	}

	public function set_typefcbk($type){
		if(is_string($type) AND !empty($type))
		{
			$this->var['typefcbk'] = $type;
			return true;
		}
		return false;
	}

	public function set_titlefcbk($title){
		if(is_string($title) AND !empty($title))
		{
			$this->var['titlefcbk'] = $title;
			return true;
		}
		return false;
	}

	public function set_descfcbk($desc){
		if(is_string($desc) AND !empty($desc))
		{
			$this->var['descfcbk'] = $desc;
			return true;
		}
		return false;
	}

	public function set_imgfcbk($img){
		if(is_string($img) AND !empty($img))
		{
			$this->var['imgfcbk'] = $img;
			return true;
		}
		return false;
	}

	public function set_sharefcbk($url){
		if(is_string($url) AND !empty($url))
		{
			$this->var['urlshare'] = $url;
			return true;
		}
		return false;
	}


/*
|===============================================================================
| Méthodes pour ajouter des feuilles de CSS et de JavaScript
|	. ajouter_css
|	. ajouter_js
|===============================================================================
*/
	public function ajouter_css($nom)
	{
		if(is_string($nom) AND !empty($nom) AND file_exists('./assets/delitoon/css/' . $nom . '.css'))
		{
			$this->var['css'][] = dcss_url($nom);
			return true;
		}
		return false;
	}

	public function ajouter_js($nom)
	{
		if(is_string($nom) AND !empty($nom) AND file_exists('./assets/delitoon/javascript/' . $nom . '.js'))
		{
			$this->var['js'][] = djs_url($nom);
			return true;
		}
		return false;
	}

/*
|===============================================================================
| Méthodes pour modifier le thème
|	. set_theme
|===============================================================================
*/

	public function set_theme($theme)
	{
		if(is_string($theme) AND !empty($theme) AND file_exists('./membres/themes/' . $theme . '.php'))
		{
			$this->theme = $theme;
			return true;
		}
		return false;
	}
}

/* =============================================================================
	name : 				layout
	description : librairie permettant de faire appel aux différents thèmes et vues
	author : 			leradiologue
	création : 		2017-07-28
	modifier le : 2017-07-28
	url : 				http://www.lrdlg.eu
============================================================================= */
