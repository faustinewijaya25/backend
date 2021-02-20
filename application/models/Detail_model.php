<?php
/**
 *
 */
class Detail_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

//public function detaillist()
//  {
    // SELECT * FROM `detail`
  //  $this->db->select('*');
  //  $this->db->from('detailresep');
//    $query = $this->db->get();
  //  return $query->result();
// //  }


public function detaillist($where='')
{
  $this->db->select('*');
  $this->db->from('resep');
  $this->db->join('detailresep', 'ON(resep.nama_resep = detailresep.nama_resep)');
if ( $where != '' ) $this->db->where( $where );
  $query = $this->db->get();
  return $query->result_array();
}

  // public function gorenganlist($where='')
  // {
  //   $this->db->select('*');
  //   $this->db->from('gorengan');
  //   $this->db->join('detailresep', 'ON(gorenhgan.nama_resep = detailresep.nama_resep)');
  // if ( $where != '' ) $this->db->where( $where );
  //   $query = $this->db->get();
  //   return $query->result_array();
  // }
  //
  // public function kuahlist($where='')
  // {
  //   $this->db->select('*');
  //   $this->db->from('kuah');
  //   $this->db->join('detailresep', 'ON(kuah.nama_resep = detailresep.nama_resep)');
  // if ( $where != '' ) $this->db->where( $where );
  //   $query = $this->db->get();
  //   return $query->result_array();
  // }
}

?>
