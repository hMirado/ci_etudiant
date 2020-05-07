<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax_matiere extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model("Matiere_model", "mat");
	}

	public function matLate()
	{
		$niveau = $this->input->post('niveau_late');
		$matiere= $this->mat->getMat($niveau);

		echo json_encode($matiere);
	}

	public function matAbs()
	{
		$niveau = $this->input->post('niveau_abs');
		$matiere= $this->mat->getMat($niveau);

		echo json_encode($matiere);
	}

	public function matNote()
	{
		$niveau = $this->input->post('niveau_note');
		$matiere= $this->mat->getMat($niveau);

		echo json_encode($matiere);
	}

}
