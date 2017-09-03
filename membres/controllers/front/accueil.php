<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accueil extends CI_Controller {

  /* constructeur de la classe */
  public function __construct(){
    parent::__construct();
    /* ajout des librairies, helper et models spécifiques à Home */
    //$this->load->model('front/_m.php', 'h');
  }

// fonction index qui utilise la fonction d'affichage de la home
 public function index(){
   $this->afficheAccueil();
 }
 // fonction d'affichage de la home
 public function afficheAccueil(){

   $this->layout->views('front/navTopConnect');
   $this->layout->view('front/accueil_v');
 }

}
