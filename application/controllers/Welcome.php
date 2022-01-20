<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent:: __construct();
		$this -> load -> helper ('form');
		$this->load->model('BuscProgramas','',TRUE);
}
	function index(){
		//obtenemos todos los registros que contiene la tabla de categoria
		$data['Lenguaje'] = $this -> BuscProgramas-> getAll();
		// print_r($data);
		// exit;
		$this->load->view('Header',$data);
		$this->load->view('Principal');
		$this->load->view('Footer');
	}
	function admin(){
		$this->load->view('RegistroAdmin');
	}
}
