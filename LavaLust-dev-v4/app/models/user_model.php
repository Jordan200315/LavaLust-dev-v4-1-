<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class user_model extends Model
{
    public function read()
    {
        return $this->db->table('jmm_users')->get_all();
    }

    public function create($lastname, $firstname, $email, $gender, $address)
    {
        $data = array(
            'jmm_last_name' => $lastname,
            'jmm_first_name' => $firstname,
            'jmm_email' => $email,
            'jmm_gender' => $gender,
            'jmm_address' => $address
        );
        return $this->db->table('jmm_users')->insert($data);
    }

    public function get1($id)
    {
        return $this->db->table('jmm_users')->where('id', $id)->get();
    }

    public function update($lastname, $firstname, $email, $gender, $address, $id)
    {
        $data = array(
            'jmm_last_name' => $lastname,
            'jmm_first_name' => $firstname,
            'jmm_email' => $email,
            'jmm_gender' => $gender,
            'jmm_address' => $address
        );
        return $this->db->table('jmm_users')->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->db->table('jmm_users')->where('id', $id)->delete();
    }
}