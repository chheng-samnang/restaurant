<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_c extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("report_model","rm");
  }

  public function sale_report_daily()
  {
    $date_f = $this->input->post("txtDateF");
    $date_t = $this->input->post("txtDateT");
    $date_f = $date_f!=""?$date_f:"";
    $date_t = $date_t!=""?$date_t:"";

    $data["receipt"] = $this->rm->get_receipt($date_f,$date_t);
    $this->load->view("template/header");
    $this->load->view("template/left");
    $this->load->view("sale_report_daily",$data);
    $this->load->view("template/footer");
  }
}
