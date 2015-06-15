<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
    }

	function index()
	{
	    $data = array(
            'content' => $this->load->view('grid', '', TRUE),
            'script' => $this->load->view('grid-js', '', TRUE)
        );
		$this->load->view('layout-template', $data);
	}

}