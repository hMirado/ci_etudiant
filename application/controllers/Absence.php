<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absence extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->js('assets/dev/js/abs.js');

		$this->load->model("Abs_model", "abs");
		$this->load->model("Etudiant_model", "etudiant");
	}

	public function Add()
	{
		$post = $this->input->post();
		if(!empty($post)){
			$this->abs->saveAbs();
		}

		$this->data['listEt'] = $this->etudiant->listEtudiant();
		$this->load->view('content/abs/abs_add', $this->data);
	}

	public function List()
	{
		$this->data['listAbs'] = $this->abs->listAbs();
		$this->load->view('content/abs/abs_list', $this->data);
	}

}
