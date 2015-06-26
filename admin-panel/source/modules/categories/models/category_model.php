<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

	function list_categories()
	{
		$this->load->library('datatables');
        $this->datatables->select('id, category, description')
            ->from('categories')
            ->unset_column('id')
            ->edit_column('category', '<a href="#" class="_edit" data-foo="$1" title="Detail">$2</a>', 'id, category');
        return $this->datatables->generate();
	}
	
	function get_category($id)
	{
		$result = $this->db->get_where('categories', array('id'=> $id));
		return $result->row_array();
	}
    
    function parent_opt()
    {
        $result = $this->db->get('categories');
        
        $data[''] = 'None';
        foreach($result->result_array() as $row)
        {
            $data[$row['id']] = $row['category'];
        }
        return $data; 
    }
	
	function save_category($data)
    {
        if(!$data['id'])
        {
            $this->db->insert('categories', $data);      
            return $this->db->insert_id();      
        }
        else
        {
            $this->db->update('categories', $data, array('id'=>$data['id']));
        }
    }
    
    function delete_category($id)
    {
        $this->db->delete('categories', array('id' => $id));
		$this->session->set_flashdata('alert', 'Data has been deleted!');
    }

}