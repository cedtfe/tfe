<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  /* constructeur de la classe */
  public function __construct(){
    parent::__construct();
    /* ajout des librairies, helper et models spécifiques à Home */
    //$this->load->model('front/home_m.php', 'h');
  }

// fonction index qui utilise la fonction d'affichage de la home
 public function index(){
   $this->afficheHome();
 }
 // fonction d'affichage de la home
 public function afficheHome(){
   $this->layout->view('front/home_v');
 }

}
