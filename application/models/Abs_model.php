<?php


class Abs_model extends MY_Model
{
	protected $table = 'absence';

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * CRUD ABSENT
	 */
	public function saveAbs()
	{
		extract($this->input->post());
		$data = array(
			'num_et_abs' => $num_et_abs,
			'nom_et_abs' => $nom_et_abs,
			'niveau_abs' => $niveau_abs,
			'matiere_abs' => $matiere_abs,
			'date_abs' => $date_abs
		);

		return $this->create($data);
	}

	public function listAbs()
	{
		$query = $this->readAll(null,null, null, array('num_et_abs','ASC'));
		return $query;
	}


	/**
	 *  AFFICHER LES ABSENCES DE L'ETUDIANT CHOISI
	 */
/*	public function etAbs($id_et)
	{
		$id_et = $this->input->post('id_et');
		$query = $this->readAll(null, "num_et_abs = $id_et");
		return $query;
	}*/
	public function etAbs($num_et_abs)
	{
		//$id_et = $this->input->post('id_et');
		$query = $this->readAll(null,"num_et_abs = '$num_et_abs'");
		return $query;
	}
}
