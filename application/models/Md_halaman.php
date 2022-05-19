<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_halaman extends CI_Model {

    function getHalamanbyLabel($id, $bhs) {
        $hasil = $this->db->select('halaman.*,halaman_label.label_id')
                ->from('halaman')
                ->join('halaman_label', 'halaman.halaman_id = halaman_label.halaman_id', 'inner')
                ->where('halaman_label.label_id', $id)
                ->where('halaman.bahasa', $bhs)
                ->where('halaman.post_status', 1)
                ->where('halaman.status', 1)
                ->order_by('halaman.tgl_post', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanbyLabel1($id) {
        $hasil = $this->db->select('halaman.*,halaman_label.label_id')
                ->from('halaman')
                ->join('halaman_label', 'halaman.halaman_id = halaman_label.halaman_id', 'inner')
                ->where('halaman_label.label_id', $id)
                ->where('halaman.post_status', 1)
                ->where('halaman.status', 1)
                ->order_by('halaman.tgl_post', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanbyLabelHome($id, $bhs, $limit) {
        $this->db->limit($limit);
        $hasil = $this->db->select('halaman.*,halaman_label.label_id')
                ->from('halaman')
                ->join('halaman_label', 'halaman.halaman_id = halaman_label.halaman_id', 'inner')
                ->where('halaman_label.label_id', $id)
                ->where('halaman.bahasa', $bhs)
                ->where('halaman.post_status', 1)
                ->where('halaman.status', 1)
                ->order_by('halaman.tgl_post', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanbyLabelHome1($id, $limit) {
        $this->db->limit($limit);
        $hasil = $this->db->select('halaman.*,halaman_label.label_id')
                ->from('halaman')
                ->join('halaman_label', 'halaman.halaman_id = halaman_label.halaman_id', 'inner')
                ->where('halaman_label.label_id', $id)
                ->where('halaman.post_status', 1)
                ->where('halaman.status', 1)
                ->order_by('halaman.tgl_post', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getAgendaHome($id, $bhs, $limit, $start, $finish) {
        $this->db->limit($limit);
        $hasil = $this->db->select('halaman.*,halaman_label.label_id')
                ->from('halaman')
                ->join('halaman_label', 'halaman.halaman_id = halaman_label.halaman_id', 'inner')
                ->where('halaman_label.label_id', $id)
                ->where('halaman.tgl_post >=', $start)
                ->where('halaman.tgl_post <=', $finish)
                ->where('halaman.bahasa', $bhs)
                ->where('halaman.post_status', 1)
                ->where('halaman.status', 1)
                ->order_by('halaman.tgl_post', 'ASC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getAgendaHome1($id, $limit, $start, $finish) {
        $this->db->limit($limit);
        $hasil = $this->db->select('halaman.*,halaman_label.label_id')
                ->from('halaman')
                ->join('halaman_label', 'halaman.halaman_id = halaman_label.halaman_id', 'inner')
                ->where('halaman_label.label_id', $id)
                ->where('halaman.tgl_post >=', $start)
                ->where('halaman.tgl_post <=', $finish)
                ->where('halaman.post_status', 1)
                ->where('halaman.status', 1)
                ->order_by('halaman.tgl_post', 'ASC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanbyLabelPagination($limit, $start, $id, $bhs) {
        $this->db->limit($limit, $start);
        $hasil = $this->db->select('halaman.*,halaman_label.label_id, label.label')
                ->from('halaman')
                ->join('halaman_label', 'halaman.halaman_id = halaman_label.halaman_id', 'inner')
                ->join('label', 'halaman_label.label_id = label.label_id', 'inner')
                ->where('halaman_label.label_id', $id)
                ->where('halaman.bahasa', $bhs)
                ->where('halaman.post_status', 1)
                ->where('halaman.halamanjenis_id', 1)
                ->where('halaman.status', 1)
                ->order_by('halaman.tgl_post,halaman.halaman_id', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    
    function getHalamanbyLabelPagination1($limit, $start, $id) {
        $this->db->limit($limit, $start);
        $hasil = $this->db->select('halaman.*,halaman_label.label_id, label.label')
                ->from('halaman')
                ->join('halaman_label', 'halaman.halaman_id = halaman_label.halaman_id', 'inner')
                ->join('label', 'halaman_label.label_id = label.label_id', 'inner')
                ->where('halaman_label.label_id', $id)
                ->where('halaman.post_status', 1)
                ->where('halaman.status', 1)
                ->order_by('halaman.tgl_post', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanAll($id) {
        $hasil = $this->db
                        ->order_by('halaman.tgl_post', 'DESC')->get_where('halaman', array('halamanjenis_id' => $id, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getCountHalaman() {
        $this->db->select('count(*) as jumlah');
        $hasil = $this->db->get_where('halaman', array('status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getCountMember() {
        $this->db->select('count(*) as jumlah');
        $hasil = $this->db->get_where('member', array('status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalaman() {
        $hasil = $this->db->get_where('halaman', array('status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanTambahan($id) {
        $hasil = $this->db->get_where('halaman', array('halaman_id' => $id, 'status' => 1, 'halamanjenis_id' => 5));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanPublished($bhs) {
        $hasil = $this->db->get_where('halaman', array('status' => 1, 'post_status' => 1, 'bahasa' => $bhs));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanforEditbyId($id) {
        $hasil = $this->db->get_where('halaman', array('halaman_id' => $id, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanbyId($id) {
        $hasil = $this->db->get_where('halaman', array('halaman_id' => $id, 'post_status' => 1, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        }
    }

    function getHalamanbyIdBhs($id, $bhs) {
        $hasil = $this->db->get_where('halaman', array('halaman_id' => $id, 'bahasa' => $bhs, 'post_status' => 1, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanAktifbyId($id) {
        $hasil = $this->db->get_where('halaman', array('halaman_id' => $id, 'status' => 1, 'post_status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function addHalaman($data) {
        $this->db->insert('halaman', $data);
    }

    function updateHalaman($id, $data) {
        $this->db->where('halaman_id', $id);
        $this->db->update('halaman', $data);
    }

    function getHalamanLast() {
        $hasil = $this->db->select('halaman_id')
                ->from('halaman')
                ->where('status', 1)
                ->order_by('halaman_id', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanMod($bahasa) {
        $hasil = $this->db->select('tgl_perubahan')
                ->from('halaman')
                ->where('status', 1)
                ->where('bahasa', $bahasa)
                ->order_by('tgl_perubahan', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function getKatMod() {
        $hasil = $this->db->select('tgl_perubahan')
                ->from('item')
                ->where('status', 1)
                ->order_by('tgl_perubahan', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    function getHalamanModif() {
        $hasil = $this->db->select('tgl_perubahan')
                ->from('halaman')
                ->where('status', 1)                
                ->order_by('tgl_perubahan', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanSebelumbyTanggal($bahasa, $tanggal, $id) {
        $hasil = $this->db->select('*')
                ->where('status', 1)
                ->where('post_status', 1)
                ->where('bahasa', $bahasa)
                ->where('halaman_id <>', $id)
                ->where('tgl_post <=', $tanggal)
                ->order_by('tgl_post', 'DESC')
                ->get('halaman', 4);
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanbyLabelPrevious($limit, $start, $id, $bhs, $tgl) {
        $this->db->limit($limit);
        $hasil = $this->db->select('halaman.*,halaman_label.label_id')
                ->from('halaman')
                ->join('halaman_label', 'halaman.halaman_id = halaman_label.halaman_id', 'inner')
                ->where('halaman_label.label_id', $id)
                ->where('halaman.bahasa', $bhs)
                ->where('halaman.tgl_post <', $tgl)
                ->where('halaman.post_status', 1)
                ->where('halaman.status', 1)
                ->order_by('halaman.tgl_post', 'DESC')
                ->get();
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanbyJudul($id, $bhs) {
        $id = strtolower($id);
        $hasil = $this->db->get_where('halaman', array('lower(judul)' => $id, 'status' => 1, 'bahasa' => $bhs));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanbyJudulManage($id) {
        $hasil = $this->db->get_where('halaman', array('judul' => $id, 'status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

//    function getHalamanbyId($id, $bhs) {
//        $hasil = $this->db->get_where('halaman', array('halaman_id' => $id, 'status' => 1, 'bahasa' => $bhs));
//        if ($hasil->num_rows() > 0) {
//            foreach ($hasil->result() as $row) {
//                $data[] = $row;
//            }
//            return $data;
//        }
//    }
    function getHalamanbyTipeManage() {
        $hasil = $this->db->get_where('halaman', array('status' => 1, 'halamanjenis_id' => 5));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanbyTipe($id, $bhs) {
        $hasil = $this->db->get_where('halaman', array('judul' => $id, 'status' => 1, 'bahasa' => $bhs));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    function getKatalogbyTipe() {
        $hasil = $this->db->get_where('item', array('status' => 1));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getHalamanByTypeByLangLimit($tipe, $bhs, $limit) {
        $this->db->limit($limit);
        $hasil = $this->db->get_where('halaman', array('halamanjenis_id' => $tipe, 'status' => 1, 'bahasa' => $bhs));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

//    function getHalaman($id) {
//        $hasil = $this->db->get_where('halaman', array('halaman_id' => $id, 'status' => 1));
//        if ($hasil->num_rows() > 0) {
//            foreach ($hasil->result() as $row) {
//                $data[] = $row;
//            }
//            return $data;
//        }
//    }
//    function updateHalaman($id, $data) {
//        $this->db->where('halaman_id', $id);
//        $this->db->update('halaman', $data);
//    }
//    function addHalaman($data) {
//        $this->db->insert('halaman', $data);
//    }
}
