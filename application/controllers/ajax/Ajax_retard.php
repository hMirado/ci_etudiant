<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax_retard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Etudiant_model", "etudiant");
	}

	public function nom()
	{
		$identifiant = $this->input->post('num_et_late');
		$nom = $this->etudiant->nomlate($identifiant);

		echo json_encode($nom);
	}

}
