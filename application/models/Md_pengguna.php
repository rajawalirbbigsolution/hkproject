<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_pengguna extends CI_Model {

    function checkLogin($user) {
        $hasil = $this->db->get_where('pengguna', array('username' => $user, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function checkLoginbyID($id) {
        $hasil = $this->db->get_where('pengguna', array('pengguna_id' => $id, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getPenggunaAll() {
        $hasil = $this->db->get_where('pengguna', array('status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getPenggunaById($id) {
        $hasil = $this->db->get_where('pengguna', array('pengguna_id' => $id, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function updatePengguna($id, $data) {
        $this->db->where('pengguna_id', $id);
        $this->db->update('pengguna', $data);
    }

    function addPengguna($data) {
        $this->db->insert('pengguna', $data);
    }
    
    function checkPengguna($user) {
        $hasil = $this->db->get_where('pengguna', array('username' => $user, 'status' => 1));
         if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

}
