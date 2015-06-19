<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('article_model');
    }

	function index()
	{
	    $this->config->set_item('company_name', 'testsssssssssssss');
	    $data = array(
            'content' => $this->load->view('grid', '', TRUE),
            'script' => $this->load->view('grid-js', '', TRUE)
        );
		$this->load->view('layout-template', $data);
	}
    
    function create()
    {
        
    }
    
    function update()
    {
        
    }
    
    function delete()
    {
        
    }

}