<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Logins extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
  }
  function login_post()
  {
    $data = $this->login_model->loginlist();
    $this->response(['logins'=> $data], 200);
  }
}

  ?>
