<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Orderpos_m extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function get_category()
  {
    $query = $this->db->get("tbl_category");
    if($query->num_rows()>0)
    {
      return $query->result();
    }else {
      return array();
    }
  }

  public function get_menu($cat_id="")
  {
    if($cat_id=="")
    {
      $query = $this->db->get("tbl_menu");
      if($query->num_rows()>0)
      {
        return $query->result();
      }else {
        return array();
      }
    }else {
      $query = $this->db->get_where("tbl_menu",array("cat_id"=>$cat_id));
      if($query->num_rows()>0)
      {
        return $query->result();
      }else {
        return array();
      }
    }
  }
}
