<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_etudiant extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->css('assets/dev/css/etudiant.css');
		$this->load->js('assets/dev/js/etudiant.js');

		$this->load->helper(array('form', 'url', 'file'));
		$this->load->model("Etudiant_model", "etudiant");
	}

	// Modifier étudiant
	public function data()
	{
		$id = $this->input->post('num');
		$data = $this->etudiant->getId($id);
		echo json_encode($data);
	}

	public function update()
	{
		$update = $this->etudiant->updateEtudiant();
		echo json_encode(array('status'=>$update));
	}

}
