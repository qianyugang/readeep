<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		//$this->load->model('model');
	}
	
	function index(){	
		$this->load->view('head');
		$this->load->view('index');
		$this->load->view('foot');
		// $this->load->view('demo.html');
	}
	
	function read(){	
		$this->load->view('head');
		$this->load->view('read');
		$this->load->view('foot');
	}
	function start(){	
		$this->load->view('welcome');
	}
	function ucenter(){	
		$this->load->view('head');
		$this->load->view('ucenter');
		$this->load->view('foot');
	}
	function write(){	
		$this->load->view('head');
		$this->load->view('write');
		$this->load->view('foot');
	}
	function picture(){	
		$this->load->view('head');
		$this->load->view('picture');
		$this->load->view('foot');
	}
	function setting(){	
		$this->load->view('head');
		$this->load->view('setting');
		$this->load->view('foot');
	}
}
