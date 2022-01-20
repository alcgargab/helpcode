<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {
	function __construct(){
	parent:: __construct();
		$this -> load -> helper ('form');
}
public function index(){
 $this -> load -> view('Header');
 $this -> load -> view('Catalogo');
 $this -> load -> view('Footer');
}
}
