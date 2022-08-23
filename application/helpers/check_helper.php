<?php

function is_logged_in()
{
    $ci = get_instance();
    $session = $ci->session->userdata('uuid');
    if (!$session) {
        redirect('signup');
    }
}

function is_admin()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');
    if ($role !== '1') {
        redirect('blocked');
    }
}
