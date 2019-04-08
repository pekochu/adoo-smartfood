<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casos_de_uso extends CI_Controller {

	public function index(){
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | Casos de uso';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('diagramas/casos_de_uso', $frontend);
		$this->load->view('templates/footer_a');
	}
}
