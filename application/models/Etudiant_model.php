<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Etudiant_model extends MY_Model
{
	protected $table = 'studant';
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    /**
     * CRUD ETUDIANT
     */
    public function save($data)
    {
        $insert_data['identifiant'] = $data['identifiant'];
        $insert_data['adresse'] = $data['adresse'];
        $insert_data['nom'] = $data['nom'];
        $insert_data['prenom'] = $data['prenom'];
        $insert_data['date_naissance'] = $data['date_naissance'];
        $insert_data['image'] = $data['image'];

        $this->db->insert('studant', $insert_data);
    }

    public function getData()
    {
		$query = $this->readAll();
		return $query;
    }

	// Récupérer l'ID étudiant à modifier
	public function getId($id)
	{
		$query = $this->readLine(null, array('identifiant'=>$id));
		return $query;
	}

	public function updateEtudiant()
	{
		$id = $this->input->post('id_et_modif');
		$field = array(
			'nom'=>$this->input->post('nom'),
			'prenom'=>$this->input->post('prenom'),
			'date_naissance'=>$this->input->post('date_naissance'),
			'adresse'=>$this->input->post('adresse')
			//'identifiant'=>$this->input->post('identifiant')
		);

		$update = $this->update($field, "id = $id");
		return $update;
	}

	/**
	 * Afficher nom etudiant par rapport aux numèro étudiant pour les retards
	 * Controller Ajax_retard
	 */
	public function nomlate($identifiant)
	{
		$select = $this->read('nom, prenom, ', array('identifiant' => $identifiant));
		return $select;
	}


	/**
	 * Liste des etudiants utilisés pour enégistrer les retards & autres
	 */
	public function listEtudiant()
	{
		$this->db->select('*');
		$this->db->from('studant');
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * DETAIL DE L'ETUDIANT
	 */
	public function detailEt($id)
	{
		$query = $this->readLine(null, "identifiant = '$id'");
		return $query;
	}
}
