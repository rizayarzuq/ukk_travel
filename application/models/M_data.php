<?php 

class M_data extends CI_Model{
  function input_data($data){
  	$this->db->insert('rute',$data);
  }
  function tampil_data(){
    return $this->db->get('rute');
  }
  function hapus_data($id){
  	$data = array('id'=> $id);
  	$this->db->delete('rute',$data);
  }
  function edit_data($id){		
	 $this ->db->where('id',$id);
   $query = $this ->db -> get('rute');
   return $query -> row ();
}
 }