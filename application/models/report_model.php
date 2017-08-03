<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function get_receipt($date_f="",$date_t="")
  {
    if($date_f==""&&$date_t=="")
    {
      $query = $this->db->get("tbl_receipt");
      if($query->num_rows()>0)
      {
        return $query->result();
      }else {
        return array();
      }
    }else {
      $query = $this->db->query("Select * from tbl_receipt where date_crea between '$date_f' and '$date_t'");
      if($query->num_rows()>0)
      {
        return $query->result();
      }else {
        return array();
      }
    }
  }
}
