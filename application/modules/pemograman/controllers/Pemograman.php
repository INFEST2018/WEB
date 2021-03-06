<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemograman extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
		$this->_public_view= $this->config->item('public_view');
	}

	public function index()
	{
		$data=array('page_content' => 'pemograman');
		$this->load->view($this->_public_view,$data);
	}
	public function open()
	{
		$this->load->view('pemograman');
	}
}
