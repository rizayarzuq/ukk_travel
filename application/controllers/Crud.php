<?php 
class Crud extends CI_Controller{

function __construct(){

parent::__construct();	
$this->load->model('M_data');
$this->load->helper('url');
$this->load->library('encryption');
}

function tampil_data(){
$data = array ('data' => $this->M_data->tampil_data()->result());
$this->load->view('v_tampil',$data);
}

function index(){

$data['user'] = $this->M_data->tampil_data()->result();
$this->load->view('v_tampil',$data);
}
 

function tambah(){

$this->load->view('v_input');
}
 
//input data
function tambah_aksi(){

$berangkat = $this->input->post('rute_from');
$pergi = $this->input->post('rute_to');
$tanggal = $this->input->post('date');
$dewasa = $this->input->post('adult');
$anak = $this->input->post('child');

$data = array(

'rute_from' => $berangkat,
'rute_to' => $pergi,
'date' => $tanggal,
'adult' => $dewasa,
'child' => $anak
);

$this->M_data->input_data($data,'rute');

redirect('index.php/crud/tampil_data');

}
function hapus_data($id){
		$data = $this->input->get('id');
		$this->M_data->hapus_data($data);
		redirect('index.php/crud/tampil_data');
	}

function edit_data(){
		$where = $this->input->get('id');
		$data['rute'] = $this->M_data->edit_data($where, 'rute');
		$this->load->view('v_edit',$data);
	}

function update_data(){
		$berangkat = $this->input->post('rute_from');
		$pergi = $this->input->post('rute_to');
		$tanggal = $this->input->post('date');
		$dewasa = $this->input->post('adult');
		$anak = $this->input->post('child');
		$data = array(
			'rute_from' => $berangkat,
			'rute_to' => $pergi,
			'date' => $tanggal,
			'adult' => $waktu,
			'child' => $penumpang
		);
		$where = array(
			'ruteid' => $ruteid
		);
		$this->M_data->update_data($where, $data, 'rute');
		redirect('crud/tampil_data');
	}
	


}
