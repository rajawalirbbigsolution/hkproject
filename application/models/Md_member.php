<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_member extends CI_Model {

    function checkLogin($user) {
        $hasil = $this->db->get_where('member', array('email' => $user, 'status' => 1, 'isaktif'=>'Yes'));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function checkLoginbyID($id) {
        $hasil = $this->db->get_where('member', array('member_id' => $id, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getMemberAll() {
        $hasil = $this->db->get_where('member', array('status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getMemberById($id) {
        $hasil = $this->db->get_where('member', array('member_id' => $id, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function getMemberByEmail($id) {
        $hasil = $this->db->get_where('member', array('email' => $id, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function updateMember($id, $data) {
        $this->db->where('member_id', $id);
        $this->db->update('member', $data);
    }
    
    function updateMemberByEmail($id, $data) {
        $this->db->where('email', $id);
        $this->db->update('member', $data);
    }

    function addMember($data) {
        $this->db->insert('member', $data);
        return $this->db->insert_id();
    }
    
     function addGuest($data) {
        $this->db->insert('item_guest', $data);
    }

    function checkMember($user) {
        $hasil = $this->db->get_where('member', array('email' => $user, 'status' => 1));
         if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    function valid_id($email) {
        $query = $this->db->get_where('member', array('email' => $email));
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function aktifasiAkun($id) {
    $this->db->where('member_id', $id);
    $this->db->update(member, array('isaktif' => 'Yes'));
    return true;
}

    public function getGuestItem(){
        $hasil = $this->db->select('item_guest.nama as name, item_guest.hp,item_guest.perusahaan, item_guest.email, item_guest.tgl_akses, item.nama')
                 ->from('item_guest')
                ->join('item', 'item.item_id = item_guest.item_id', 'inner')
                ->where('item_guest.status', 1)
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
