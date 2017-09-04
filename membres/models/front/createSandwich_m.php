<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//https://www.codeigniter.com/userguide2/database/index.html
class CreateSandwich_m extends CI_Model
{


  public function __construct()
  {
        // Call the Model constructor
        parent::__construct();
  }

  public function get_ingr(){

    return $this->db->select('*')
                    ->from('ingredient')
                    ->join('image', 'image.idImage = ingredient.idImage', 'left')
                    ->order_by('ingredient.IdType_Ingredient', 'asc')
                    ->get()
                    ->result();

  }

  public function get_typeIngr(){

    return $this->db->select('*')
                    ->from('type_ingredient')
                    ->order_by('IdType_Ingredient', 'asc')
                    ->get()
                    ->result();

  }

}
