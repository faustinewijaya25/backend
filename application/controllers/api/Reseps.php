<?php
use Restserver\Libraries\REST_Controller;
/**
 *
 */
class Reseps extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('resep_model');
  }

   public function resepdetail_get()
  {
    // $where='';
    // if (null !== $this->get('nama_resep')){
    //   $detail = $this->get('nama_resep');
    //  $where = "nama_resep LIKE '" . $kuah . "'";
    //if ( $where != '' )  $this->db->where( $where );
  //  }
     $data = $this->resep_model->reseplist();
     $this->response(['reseps'=> $data], 200);
   }

   public function gorengandetail_get()
   {
     $data = $this->resep_model->gorenganlist();
     $this->response(['reseps'=> $data], 200);
   }

   public function kuahdetail_get()
   {
     $data = $this->resep_model->kuahlist();
     $this->response(['reseps'=> $data], 200);
   }
 }
 
?>
