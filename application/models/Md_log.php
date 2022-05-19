<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_log extends CI_Model {

    function addLog($data) {
        $this->db->insert('log', $data);
    }

    function getLogAll() {
        $this->db->order_by('log_id', 'DESC');
        $hasil = $this->db->get_where('log', array('status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getLogTop20() {
        $this->db->order_by('log_id', 'DESC');
        $this->db->where('status', 1);
        $hasil = $this->db->get('log', 20);
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
