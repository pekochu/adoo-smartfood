<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index(){
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | Bienvenidos';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('inicio', $frontend);
		$this->load->view('templates/footer_a');
	}

	public function error_404_override(){
		$this->output->set_status_header('404');
		
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | Error 404';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('error_404', $frontend);
		$this->load->view('templates/footer_a');
	}
}
