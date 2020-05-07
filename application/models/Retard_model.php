<?php


class Retard_model extends MY_Model
{
	protected $table = 'late';

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 *  CRUD
	 */
	public function saveLate()
	{
		extract($this->input->post());
		$data = array(
			'num_et_late' => $num_et_late,
			'nom_et_late' => $nom_et_late,
			'niveau_late' => $niveau_late,
			'mat_late' => $matiere_late,
			'date_late' => ($date_late),
			'heure_late' => $heure_late
		);

		return $this->create($data);
	}

	public function listLate()
	{
		$query = $this->readAll(null,null, null, array('num_et_late','ASC'));
		return $query;
	}


	/**
	 *  AFFICHER LES RETARD DE L'ETUDIANT CHOISI
	 */
	public function etlate($num_et_late)
	{
		$query = $this->readAll(null,"num_et_late = '$num_et_late'");
		return $query;
	}
}
