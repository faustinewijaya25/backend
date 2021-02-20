<?php
use Restserver\Libraries\REST_Controller;
/**
 *
 */
class Tambahs extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('tambah_model');
  }

  function tambahdetail_post()
  {
    $data = $this->resep_model->tambahlist();
    $this->response(['tambahs'=> $data], 200);
  }
}
