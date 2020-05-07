<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Retard extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->js('assets/dev/js/retard.js');
		//$this->load->js('assets/dev/js/matiere.js');

		$this->load->model("Retard_model", "retard");
		$this->load->model("Etudiant_model", "etudiant");
	}

	/**
	 * CRUD ETUDIANT
	 */
	public function Add()
	{
		$post = $this->input->post();
		if(!empty($post)){
			$this->retard->saveLate();
		}

		$this->data['listEt'] = $this->etudiant->listEtudiant();
		$this->load->view('content/retard/retard_add', $this->data);
	}

	public function List()
	{
		$this->data['listLate'] = $this->retard->listLate();
		$this->load->view('content/retard/retard_list', $this->data);
	}

}
