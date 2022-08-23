<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tm_user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/loginView');
        } else {
            $result = $this->auth->registration();
            if ($result) {
                $pesan = "Akun Berhasil di Buat Silahkan Login";
                $this->session->set_flashdata('sukses', $pesan);
                redirect('signup');
            } else {
                $pesan = "Akun Gagal di buat silahkan register ulang";
                $this->session->set_flashdata('gagal', $pesan);
                redirect('signup');
            }
        }
    }

    public function login()
    {
        $data = $this->input->post(NULL, TRUE);
        $user = $this->db->get_where('tm_user', ['email' => $data['email']])->row_array();
        $role = $user['role'];
        if ($user) {
            if (password_verify($data['password'], $user['password'])) {
                $session = [
                    'uuid' => $user['uuid'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($session);
                if ($role == "1") {
                    redirect('admin');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('gagal', 'Password Salah');
                redirect('signup');
            }
        } else {
            $this->session->set_flashdata('gagal', 'Maaf email tidak terdaftar');
            redirect('signup');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('signup');
    }

    public function block()
    {
        $this->load->view('auth/blockView');
    }
}
