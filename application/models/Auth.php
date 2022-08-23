<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Model
{
    public function registration($html = "")
    {
        $post = $this->input->post(NULL, TRUE);
        $data = [
            'uuid' => $this->uuid->v5($post['email']),
            'email' => $post['email'],
            'role' => '2',
            'password' => password_hash($post['password'], PASSWORD_DEFAULT)
        ];
        $insert = $this->db->insert('tm_user', $data);
        return $insert;
    }
}
