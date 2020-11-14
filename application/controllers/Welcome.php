<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in')!=TRUE) {
			redirect(base_url('login'), 'refresh');
		}
	}
	public function index()
	{
		$data = array(
			'title'=>'Dashboard'
		);
		$this->load->view('dashboard', $data);
	}
	public function traffic_monitoring()
	{
		$data = array(
			'title'=>'Traffic Monitoring'
		);
		$this->load->view('traffic_monitoring', $data);
	}
}
