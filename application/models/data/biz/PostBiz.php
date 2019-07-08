<?php

class PostBiz extends CI_Model
{
    public $id;
    public $title;
    public $description;
    public $created_at;
    public $updated_at;

    public function __construct()
    {
        parent::__construct();
    }
}