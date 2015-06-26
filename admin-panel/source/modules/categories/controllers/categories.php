<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
		$this->load->helper('form');
		$this->load->library('form_validation');		
	}

	function index()
	{
		$item['source'] =  site_url('categories/grid_data');
		$data = array(
			'content' => $this->load->view('grid', $item, TRUE),
			'script' => $this->load->view('grid-js', '', TRUE)
		);
		$this->load->view('layout-template', $data);
    }
	
	function grid_data()
    {
       if(!$this->input->is_ajax_request())
        {
            show_404();
            exit;
        }
       echo $this->category_model->list_categories();
    }
	
	function call_form($id = FALSE)
	{
	    if(!$this->input->is_ajax_request())
        {
            show_404();
            exit;
        }
		if($id)
		{
			$data = (array) $this->category_model->get_category($id);
		}
		else
		{
			$data = array(
				'id' => FALSE,
				'category' => '',
				'slug' => '',
				'parent' => '',
				'description' => ''
			);
		}
        $data['parent_opt'] = $this->category_model->parent_opt();
		$this->load->view('form', $data);
	}
	
	function submit_form()
	{
		$this->form_validation->set_rules('category01', 'category', 'required');
		
		if($this->form_validation->run() == FALSE)
		{
			$json = array('status'=>0, 'alert'=>validation_errors());
		}
		else
		{
			$data = array(
			    'id' => $this->input->post('id'),
                'category' => $this->input->post('category01'),
                'slug' => $this->input->post('slug'),
                'parent' => $this->input->post('parent'),
                'description' => $this->input->post('description')
			);
			$id = $this->category_model->save_category($data);
			$json = array('status'=>1,'id'=>$id, 'alert'=>'Data has been submited!');
		}
		echo json_encode($json);
	}
	
	function delete_category($id)
    {
        $this->category_model->delete_category($id);
		redirect('categories');
    }

}