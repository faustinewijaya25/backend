<?php
/**
 *
 */
class Resep_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

public function reseplist()
{
    // SELECT * FROM `detail`
    $this->db->select('*');
    $this->db->from('resep');
    $this->db->where(" nama_resep = 'TTEOKBOKKI'");
    $query = $this->db->get();
    return $query->result();
 }

public function gorenganlist()
//SELECT resep.nama_resep, resep.sejarah_resep, resep.jenis_masakan, resep.bahan, resep.cara_masak,
//resep.waktu_masak, detailresep.image FROM resep JOIN detailresep USING (nama_resep) where resep.jenis_masakan = 'GORENGAN'
{
  $this->db->select('*');
  $this->db->from('resep');
  $this->db->join('detailresep', 'ON(resep.nama_resep = detailresep.nama_resep)');
  $this->db->where("resep.jenis_masakan = 'GORENGAN'");
  $query = $this->db->get();
  return $query->result();
}

public function kuahlist()
{
  $this->db->select('*');
  $this->db->from('resep');
  $this->db->join('detailresep', 'ON(resep.nama_resep = detailresep.nama_resep)');
  $this->db->where("resep.jenis_masakan = 'KUAH'");
  $query = $this->db->get();
  return $query->result();
}
  //  public function reseplist($where='')
  //  {
  //    if ( $where != '' ) $this->db->where( $where );
  //    $query = $this->db->get('kuah');
  //    return $query->result();
  }
  ?>
