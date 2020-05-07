<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etudiant extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->css('assets/dev/css/etudiant.css');
        $this->load->js('assets/dev/js/etudiant.js');

        $this->load->helper(array('form', 'url', 'file'));
        $this->load->model("Etudiant_model", "etudiant");
        $this->load->model("Abs_model", "abs");
        $this->load->model("Retard_model", "retard");
    }

	public function index()
	{
        redirect('Etudiant/etudiant');
    }

	/**
	 * CRUD ETUDIANT
	 */
	public function add()
	{
        $data['identifiant'] = $this->input->post('identifiant', TRUE);
        $data['adresse'] = $this->input->post('adresse', TRUE);
        $data['nom'] = $this->input->post('nom', TRUE);
        $data['prenom'] = $this->input->post('prenom', TRUE);
        $data['date_naissance'] = $this->input->post('date_naissance', TRUE);

        //upload file code
        //set file upload settings
        $config['upload_path'] = APPPATH. '../uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 25000;

        $this->upload->initialize($config);
        //$this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('Content/etudiant/etudiant', $error);
        } else {
            //file is uploaded successfully
            //now get the file uploaded data
            $upload_data = $this->upload->data();

            //get the uploaded file name
            $data['image'] = $upload_data['file_name'];

            //store pic data to the db
            $this->etudiant->save($data);

            redirect('Etudiant');
        }
    }

    public function etudiant()
    {
		$this->data['listetudiant'] = $this->etudiant->getData();
        $this->load->view('content/etudiant/etudiant', $this->data);
    }

	/**
	 *  DETAIL DE L'ETUDIANT (ABS & RETARD & NOTE)
	 */
	public function detail($id_et)
	{
		$data['detail'] = $this->etudiant->detailEt($id_et);
		$data['absence'] = $this->abs->etAbs($id_et);
		$data['retard'] = $this->retard->etlate($id_et);
		$this->load->view('content/etudiant/detail_et', $data);
    }

}
