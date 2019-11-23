<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
  public function getDataPost(){
    $this->db->select('lo.id,lo.judul,lo.tanggal,lo.isi,lo.gambar');
    $this->db->from('berita lo');
    $this->db->group_by('id');
    return $this->db->get()->result_array();
  }

  public function hapusBerita($id){
    $this->db->where('id',$id);
    $query = $this->db->get('berita');
    $row = $query->row();
    unlink("./assets/file/$row->gambar");
    $this->db->delete('berita', array('id' => $id));
  }
}
