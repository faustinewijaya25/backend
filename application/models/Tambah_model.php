<?php
/**
 *
 */
class Tambah_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

//  function tambahlist()
  //{
    // SELECT * FROM `detail`
  //  $this->db->select('*');
  //  $this->db->from('tambahresep');
  //  $query = $this->db->post();
  //  return $query->result();
//  }
  public function tambahlist(){
    // membuat user_ID otomatis
    // menggunakan UNIX Timestamp --> date('U')
  //  $nick = substr( $this->input->post('nama'), 0 , 3 );
    // 3 huruf pertama dari nama user
    //$user_id = "U-".$nick.date('U');

    // menyiapkan data
    $data = [
          //  'user_ID' => $user_id,
            'nama resep' => $this->input->post('nama_resep'),
            'jenis masakan' =>$this->input->post('jenis_masakan'),
            'sejarah resep' => $this->input->post('sejarah_resep'),
            'nama pembuat' => $this->input->post('nama_pembuat'),
            'umur'=>$this->input->post('umur'),
            'pekerjaan'=>$this->input->post('pekerjaan'),
            'tahun buat'=>$this->input->post('tahun_buat'),
            'bahan'=>$this->input->post('bahan'),
            'cara masak'=>$this->input->post('cara_masak'),
          ];

    // simpan ke database dalam tabel 'users'
    $this->db->insert( 'tambahresep', $data );
  }
}

?>
