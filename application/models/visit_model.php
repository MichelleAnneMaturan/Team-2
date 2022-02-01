<?php

class visit_model extends CI_Model {
    function insertuser($data)
    {
        $this->db->insert('visit', $data);
    }

    
}