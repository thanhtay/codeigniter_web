<?php

class Hello_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_list()
    {
        $query = $this->db->get('posts', 5);
        return $query->result();
    }
}
