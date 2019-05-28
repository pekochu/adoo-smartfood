<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagramas extends CI_Controller {

	public function index(){
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | Diagramas';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('diagramas/main', $frontend);
		$this->load->view('templates/footer_a');
	}

	public function Casos_de_uso(){
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | Casos de uso';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('diagramas/casos_de_uso', $frontend);
		$this->load->view('templates/footer_a');
	}

	public function Stakeholders(){
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | Stakeholders';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('diagramas/stakeholders', $frontend);
		$this->load->view('templates/footer_a');
	}

	public function Paquetes(){
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | Diagrama de paquetes';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('diagramas/paquetes', $frontend);
		$this->load->view('templates/footer_a');
	}

	public function Actividades(){
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | Diagrama de actividades';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('diagramas/actividades', $frontend);
		$this->load->view('templates/footer_a');
	}

	public function Requerimientos(){
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | RF y RFN';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('diagramas/requerimientos', $frontend);
		$this->load->view('templates/footer_a');
	}

	public function Clases(){
		$frontend = array();
		$_css = $this->load->view('scripts/css_a', '', true);
		$_title = 'SmartFood | Diagrama de Clases';
		$this->load->view('templates/header_a', ['_css' => $_css, 'title' => $_title]);

		$frontend['_js'] = $this->load->view('scripts/js_a', '', true);
		$this->load->view('diagramas/clases', $frontend);
		$this->load->view('templates/footer_a');
	}
}
