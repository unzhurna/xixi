<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
    }

	function index()
	{
	    $this->config->set_item('company_name', 'testsssssssssssss');
	    $data = array(
            'content' => $this->load->view('form', '', TRUE),
            'script' => $this->load->view('grid-js', '', TRUE)
        );
		$this->load->view('layout-template', $data);
	}

}