<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'dt');
		//$this->load->model('Home_model');
	}

	public function atm()
	{
		$data = $this->dt->get_atm();
		echo json_encode($data);
	}

	// public function index()
	// {
	// 	$data['title'] = 'WEB GIS - Data ATM';
	// 	$data['tampil_atm'] = $this->dt->get_atm();
	// 	$this->load->view('v_home', $data);
	// }

	public function index()
	{
		$data['title'] = 'WEB GIS - Data ATM';
		$data['tampil_atm'] = $this->dt->get_atm();
		$this->load->view('v_home', $data);
	}

	public function info_ATM($id_atm)
	{
		$data['title'] = 'WEB GIS - Detail ATM';
		$data['dt_gambar'] = $this->dt->get_gambar($id_atm);
		$data['dt_id_atm'] = $this->dt->get_detail($id_atm);
		$this->load->view('v_detil', $data);
	}

}
