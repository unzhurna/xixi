<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {
    
    function category_opt()
    {
        $result = $this->db->get('categories');
        
        $data[''] = 'None';
        foreach($result->result_array() as $row)
        {
            $data[$row['id']] = $row['category'];
        }
        return $data; 
    }
    
}
