<?php

class Post_model extends CI_Model
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

    public function get_info($id)
    {
        // $query = $this->db->get_where('posts', ['id' => $id]);
        // return $query->row();
        // $this->db->where('id >', $id);
        $this->db->where(['id' => $id]);
        $query = $this->db->get('posts');

        
        $data = $query->row();
        $this->load->model('data/biz/PostBiz');
        d($data);
        $post = new PostBiz($data);
        dd($post);

    }

    public function insert_post($post)
    {

        $this->id = 1;
        $this->title = 'Title 1';
        $this->description = 'abcd efgh';
        $this->created_at = time();
        $this->updated_at = time();

        $this->db->insert('posts', $post);
    }

    public function update()
    {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    public function delete()
    {
        
    }

}
