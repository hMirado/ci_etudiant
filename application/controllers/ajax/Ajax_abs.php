<?php


class Ajax_abs extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Etudiant_model", "etudiant");
	}

	public function nom()
	{
		$identifiant = $this->input->post('num_et_abs');
		$nom = $this->etudiant->nomlate($identifiant);

		echo json_encode($nom);
	}

}
