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

  public function getBeritaLimit(){
    $this->db->select('p.id,p.judul,p.tanggal,p.isi,p.gambar');
     $this->db->from('berita p');
     $this->db->order_by('id','DESC');
     $this->db->group_by('id');
     $this->db->limit(6);
     return $this->db->get()->result_array();
  }

  public function getDetailBerita($id){
    return $this->db->get_where('berita',['id' => $id])->row_array();
  }

  public function countAllBerita(){
    return $this->db->get('berita')->num_rows();
  }

  public function getBeritaa($limit,$start){
    $this->db->order_by('id','DESC');
   return $this->db->get('berita',$limit,$start)->result_array();
  }

}
