<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Order_pos_c extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("orderpos_m","om");
  }

  public function index()
  {
    $data["category"] = $this->om->get_category();
    $this->load->view("order_pos",$data);
  }

  public function loadItem($cat_id="")
  {
    header("Access-Control-Allow-Origin: *");
  	header("Content-Type: application/json; charset=UTF-8");
    if($cat_id!="")
    {
      $menu = $this->om->get_menu($cat_id);
    }else if($cat_id=="all"||$cat_id==""){
      $menu = $this->om->get_menu("");
    }

    $outp = "";
    foreach ($menu as $key => $value) {
      if ($outp != "") {$outp .= ",";}
      $outp .= '{"Name":"'  . $value->m_name . '",';
      $outp .= '"NameKh":"'  . $value->m_name_kh . '",';
      $outp .= '"Category":"'  . $value->cat_id . '",';
      $outp .= '"Price":"'  . $value->price . '",';
      $outp .= '"Image":"'  . $value->img . '",';
      $outp .= '"Id":"'   . $value->m_id        . '"}';
    }
  	$outp ='{"records":['.$outp.']}';

  	echo($outp);
  }
}

?>
