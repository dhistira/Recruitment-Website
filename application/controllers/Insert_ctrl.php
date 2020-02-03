<?php

class insert_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('Insert_model');
}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Nama Lengkap Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[50]');

//Validating Nomor Telfon Field
$this->form_validation->set_rules('dmobile', 'Nomor Telfon', 'required|regex_match[/^[0-9]{12}$/]');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

//Validating Address Field
$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

//Validating Tanggal Lahir Field
$this->form_validation->set_rules('dlahir', 'Tanggal Lahir', 'required|min_length[10]|max_length[50]');

//Validating File Field
$this->form_validation->set_rules('dfile', 'File Resume', 'required|min_length[10]|max_length[50]');


if ($this->form_validation->run() == FALSE) {
$this->load->view('pages/insert_view');
} else {
//Setting values for tabel columns
$data = array(
'nama_lengkap' => $this->input->post('dname'),
'calon_email' => $this->input->post('demail'),
'telfon' => $this->input->post('dmobile'),
'alamat' => $this->input->post('daddress'),
'lahir' => $this->input->post('dlahir'),
'bidang' => $this->input->post('dbidang'),
'file' => $this->input->post('dfile')
);
//Transfering data to Model
$this->Insert_model->form_insert($data);
$data['message'] = 'Data berhasil dimasukkan, tunggu informasi selanjutnya lewat email';
//Loading View
$this->load->view('pages/insert_view', $data);
}
}

}

?>