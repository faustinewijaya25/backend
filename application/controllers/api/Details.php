<?php
use Restserver\Libraries\REST_Controller;
/**
 *
 */
class Details extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('detail_model');
  }

  public function detailresep_get()
  {
    $where='';
    if (null !== $this->get('nama_resep')){
      $detail = $this->get('nama_resep');
      $where = "nama_resep LIKE '" . $detail . "'";
    }
    $data = $this->detail_model->detaillist();
    $this->response(['details'=> $data], 200);
  }


  // public function gorenganresep_get()
  // {
  //   $where='';
  //   if (null !== $this->get('nama_resep')){
  //     $detail = $this->get('nama_resep');
  //     $where = "nama_resep LIKE '" . $detail . "'";
  //   }
  //   $data = $this->detail_model->gorenganlist($where);
  //   $this->response(['details'=> $data], 200);
  // }
  //
  // public function kuahresep_get()
  // {
  //   $where='';
  //   if (null !== $this->get('nama_resep')){
  //     $detail = $this->get('nama_resep');
  //     $where = "nama_resep LIKE '" . $detail . "'";
  //   }
  //   $data = $this->detail_model->kuahlist($where);
  //   $this->response(['details'=> $data], 200);
  // }

}
