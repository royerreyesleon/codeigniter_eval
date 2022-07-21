<?php
class User_model extends CI_Model
{
    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        $result = $query->row();

        if ($query->num_rows() > 0) {

            if ($password === $this->encryption->decrypt($result->password)) {
                $this->session->set_userdata('GLOBAL_LOGIN', true);
                $this->session->set_userdata('GLOBAL_USER_FULL_NAME', $result->full_name);
                $this->session->set_userdata('GLOBAL_USER_EMAIL', $result->email);
                $this->session->set_userdata('GLOBAL_USER_ROLE', $result->role);
                return '';
            } else {
                return 'Password incorrect';
                // return 'User or Password incorrect';
            }
        } else {
            return 'Email incorrect';
            // return 'Email or Password incorrect';
        }
    }

    public function register($data)
    {
        $data = array(
            'full_name' => $data['full_name'],
            'email'     => $data['email'],
            'password'  => $this->encryption->encrypt($data['password']),
            'role'      => 'COMMON',
        );

        $this->db->insert('users', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_userdata('GLOBAL_LOGIN', true);
            $this->session->set_userdata('GLOBAL_USER_FULL_NAME', $data['full_name']);
            $this->session->set_userdata('GLOBAL_USER_EMAIL', $data['email']);
            $this->session->set_userdata('GLOBAL_USER_ROLE', $data['role']);
            return '';
        } else {
            return 'Error model';
        }
    }
}
