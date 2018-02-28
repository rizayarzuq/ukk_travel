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
function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }


    
  function tampil_data_customer(){
    return $this->db->get('tb_customer');
  }


  function tampil_data_transportation(){
    return $this->db->get('tb_transportation');
  }

  function tampil_data_transportation_type(){
    return $this->db->get('tb_transportation_type');
  }

  function tampil_data_reservation(){
    return $this->db->get('tb_reservation');
  }
}