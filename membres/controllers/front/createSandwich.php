<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CreateSandwich extends CI_Controller {

  /* constructeur de la classe */
  public function __construct(){
    parent::__construct();
    /* ajout des librairies, helper et models spécifiques à Home */
    $this->load->model('front/createSandwich_m','cs');

  }

// fonction index qui utilise la fonction d'affichage de la home
 public function index(){
   $this->afficheCreate();
 }
 // fonction d'affichage de la home
 public function afficheCreate(){

   // récupération des données sandwich
   $data['ingr'] = $this->cs->get_ingr();
   $data['typeIngr'] = $this->cs->get_typeIngr();
   $data['ingrFull'] = $this->cs->get_fullIngr();

   //$this->lrdlg->pre($data['ingrFull']);




   // appel des vues
   $this->layout->views('front/navTopConnect');
   $this->layout->view('front/createSandwich_v', $data);

 }

}
