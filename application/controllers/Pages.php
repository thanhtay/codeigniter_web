<?php
class Pages extends CI_Controller
{
    protected $template;
    public function __construct()
    {
        parent::__construct();

        if (is_null($this->template)) {
            $this->template = 'layouts/app';
        }
        $this->load->helper(['url', 'until']);
    }
    /**
     * This method just work for 1 action in controller
     */
    // public function _remap($method)
    // {
    //     if ($method === 'some_method') {
    //         $this->$method();
    //     } else {
    //         $this->default_method();
    //     }
    // }

    public function _output($output)
    {
        echo $output;
    }

    public function index()
    {
        echo "Hello world!";
    }

    public function about()
    {
        echo "About us!";
    }

    public function contact()
    {
        $contents = $this->load->view('pages/contact', null, true);
        return $this->load->view($this->template, ['contents' => $contents]);
    }

    public function detail($id)
    {
        $data = ['id' => $id];
        $this->load->view('pages/detail', $data);
        $string = $this->load->view('pages/contact', '', true);
    }

    public function add_post()
    {
        $this->load->model('logic/post_model', 'post_model');
        $post = [
            'title' => 'Title 5',
            'description' => 'abc def',
            'created_at' => time(),
            'updated_at' => time(),
        ];
        $this->post_model->insert_post($post);
        redirect('pages/list_post');
    }

    public function list_post()
    {
        $this->load->model('logic/post_model', 'post_model');
        $posts = $this->post_model->get_list();

        $data = [
            'posts' => $posts,
        ];
        $contents = $this->load->view('pages/list_posts', $data, true);
        return $this->load->view($this->template, ['contents' => $contents]);

    }

    public function post($id)
    {
        $this->load->model('logic/post_model', 'post_model');
        $post = $this->post_model->get_info($id);
        dd($post);
    }
}
