<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class jnsjabatan extends CI_controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('jnsjabmodel','model');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('partial/header');
		$this->load->view('partial/sidebar');
		$this->load->view('jabatan/bcjnsjab');
		$this->load->view('jabatan/jnsjabview');
		$this->load->view('partial/footer');
	}

	function ambildata(){
		$datajabatan = $this->model->ambildata();
		echo json_encode($datajabatan);
	}


}