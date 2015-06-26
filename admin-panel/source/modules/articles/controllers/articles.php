<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('article_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
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
        $item['category_opt'] = $this->article_model->category_opt();
        $data = array(
            'content' => $this->load->view('form', $item, TRUE),
            'script' => $this->load->view('form-js', '', TRUE)
        );
		$this->load->view('layout-template', $data);
    }
    
    function update()
    {
        echo "cumi";
    }
    
    function post()
    {
        /*$sdsd = extract($_POST);
        print_r($sdsd);*/
        
        echo $this->input->post('content');
    }
    
    function error()
    {
        echo "error";
    }
    
    function do_upload()
    {
        $directory = '../images/';
        if (!is_dir($directory))
        {
            mkdir($directory, 0777);
        }
        
        $_FILES['file']['type'] = strtolower($_FILES['file']['type']);
         
        if ($_FILES['file']['type'] == 'image/png'
        || $_FILES['file']['type'] == 'image/jpg'
        || $_FILES['file']['type'] == 'image/gif'
        || $_FILES['file']['type'] == 'image/jpeg'
        || $_FILES['file']['type'] == 'image/pjpeg')
        {
            // setting file's mysterious name
            $filename = md5(date('YmdHis')).'.jpg';
            $file = $directory.$filename;
         
            // copying
            move_uploaded_file($_FILES['file']['tmp_name'], $file);
         
            // displaying file
            $array = array(
                'filelink' => 'http://localhost/xxx/images/'.$filename
            );
         
            echo stripslashes(json_encode($array));
         
        }
    }
    
    function delete()
    {
        
    }

}