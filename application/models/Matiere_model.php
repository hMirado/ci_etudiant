<?php


class Matiere_model extends MY_Model
{
	protected $table = 'matiere';
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getMat($niveau)
	{
		$select = $this->read(null, array('niveau_mat' => $niveau));
		return $select;
	}
}
