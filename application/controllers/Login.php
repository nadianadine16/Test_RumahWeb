<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();        
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Registrasi';                        
        $this->load->view('login/index', $data);        
    }
}