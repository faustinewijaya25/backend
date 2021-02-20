<?php
/**
 *
 */
class Login_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

  function loginlist()
  {
    // SELECT * FROM `detail`
    $this->db->select('*');
    $this->db->from('login');
    $query = $this->db->get();
    return $query->result();
  }
}


?>
