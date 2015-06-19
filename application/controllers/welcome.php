<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        //$this->load->model('article_model');
    }

    function index()
    {
        $this->load->view('public-layout');
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