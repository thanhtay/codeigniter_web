<?php
class Helloworld extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('hello_model');
        $abc = $this->hello_model->get_list();
        dd($abc);
        $this->load->view('index');
    }
}
