<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function admin()
    {
        is_admin();
        $this->load->view("layout/header");
        $this->load->view("admin/index");
        $this->load->view("layout/footer");
    }

    public function user()
    {
        $this->load->view("layout/header");
        $this->load->view("user/index");
        $this->load->view("layout/footer");
    }
}
