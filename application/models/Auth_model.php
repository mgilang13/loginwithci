<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function input_to_db($data)
    {
        $this->db->insert('users', $data);
    }

    public function fit_user($email)
    {
        return $this->db->get_where('users', ['email' => $email])->row_array();
    }

    public function cek_password($user, $password)
    {
        return password_verify($password, $user['password']);
    }
}