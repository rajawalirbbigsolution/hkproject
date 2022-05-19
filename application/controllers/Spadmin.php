<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Spadmin extends CI_Controller {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        $this->load->database();
        $this->load->model('Md_pengguna');
       $this->load->model('Md_member');
        $this->load->model('Md_halaman');
        
           
        $this->load->model('Md_log');

        $this->load->library('pagination');
        $this->load->library('upload');
        $this->load->library('image_lib');
        $this->load->library('encryption');

        $this->load->helper('string');
        $this->load->helper('encrypt_helper');
        $this->load->helper('session_helper');
        $this->load->helper('bulan_helper');
        $this->load->helper('time_passed_helper');
        $this->load->helper(array('form', 'url'));

        /* cache controll */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

    /**     * Default function, redirects to login page if no admin logged in yet** */
    public function index() {
        if ($this->session->userdata('login') != 1)
            redirect(base_url() . 'lawang', 'refresh');
        if ($this->session->userdata('login') == 1 and $this->session->userdata('login_type') == 'spadmin')
            redirect(base_url() . 'spadmin/dashboard', 'refresh');
        if ($this->session->userdata('login') == 2 and $this->session->userdata('login_type') == 'pegawai')
            redirect(base_url() . 'spadmin/dashboard', 'refresh');
    }

    /**     * ADMIN DASHBOARD** */
    function dashboard() {
        if ($this->session->userdata('login') != 1)
            redirect(base_url() . 'lawang', 'refresh');

       

        $page_data['page_name'] = 'dashboard';
        $page_data['page_title'] = 'admin dashboard';
        $this->load->view('index', $page_data);
    }

    /**     * MANAGE PENGGUNA* * */
    function manage_pengguna($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('login') != 1)
            redirect(base_url() . 'lawang', 'refresh');
        if ($this->session->userdata('jenis_pengguna') == 'pegawai') {
            redirect(base_url() . 'spadmin/dashboard');
        }

        if ($param1 == 'create') {
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->encryption->encrypt($this->input->post('password'));
            $kpassword = $this->input->post('kpassword');
            $data['nama'] = $this->input->post('nama');
            $data['level'] = $this->input->post('level');
            $data['status'] = 1;
            $sukses = 0;
            $check = $this->Md_pengguna->checkPengguna($data['username']);
            if ($kpassword == $this->input->post('password')) {
                if (!isset($check)) {
                    $this->Md_pengguna->addPengguna($data);
                }
            }

            //log dashboard
            $log['ip'] = $this->input->ip_address();
            $log['jenis_aksi'] = 'Etc';
            $log['keterangan'] = 'Tambah Pengguna';
            $log['tgl'] = date('Y-m-d');
            $log['jam'] = date('H:i:s');
            $log['pengguna_id'] = $this->session->userdata('user_id');
            $log['status'] = 1;
            $this->Md_log->addLog($log);
            //end log dashboard

            $this->session->set_flashdata('flash_message', 'user opened');
            redirect(base_url() . 'spadmin/manage_pengguna', 'refresh');
        }
        if ($param1 == 'edit' && $param2 == 'do_update') {
            //$data['username'] = $this->input->post('username');
            $data['nama'] = $this->input->post('nama');
            $data['level'] = $this->input->post('level');
            $this->Md_pengguna->updatePengguna($param3, $data);

            //log dashboard
            $log['ip'] = $this->input->ip_address();
            $log['jenis_aksi'] = 'Etc';
            $log['keterangan'] = 'Edit Pengguna';
            $log['tgl'] = date('Y-m-d');
            $log['jam'] = date('H:i:s');
            $log['pengguna_id'] = $this->session->userdata('user_id');
            $log['status'] = 1;
            $this->Md_log->addLog($log);
            //end log dashboard

            $this->session->set_flashdata('flash_message', $data['nama'] . ' - ' . $data['level'] . ' - ' . $param3);
            redirect(base_url() . 'spadmin/manage_pengguna', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_profile'] = $this->Md_pengguna->getPenggunaById($param2);
        }
        if ($param1 == 'reset') {
            $pengguna = $this->Md_pengguna->getPenggunaById($param2);
            $password = random_string('alnum', 8);

            $data['password'] = $this->encryption->encrypt($password);
            $this->Md_pengguna->updatePengguna($param2, $data);

            $this->session->set_flashdata('flash_message', 'Reset password berhasil dilakukan<br><br>'
                    . 'Username : <b>' . $pengguna[0]->username . '</b><br>'
                    . 'Password &nbsp;: <b>' . $password . '</b>');
            redirect(base_url() . 'spadmin/manage_pengguna', 'refresh');
        }
        if ($param1 == 'delete') {
            $data['status'] = 2;
            $this->Md_pengguna->updatePengguna($param2, $data);
            //log dashboard
            $log['ip'] = $this->input->ip_address();
            $log['jenis_aksi'] = 'Etc';
            $log['keterangan'] = 'Hapus Pengguna';
            $log['tgl'] = date('Y-m-d');
            $log['jam'] = date('H:i:s');
            $log['pengguna_id'] = $this->session->userdata('user_id');
            $log['status'] = 1;
            $this->Md_log->addLog($log);
            //end log dashboard
            $this->session->set_flashdata('flash_message', 'user deleted');
            redirect(base_url() . 'spadmin/manage_pengguna', 'refresh');
        }

        $data_pengguna = $this->Md_pengguna->getPenggunabyId($this->session->userdata('user_id'));
        $page_data['nama'] = $data_pengguna[0]->nama;

        $page_data['page_name'] = 'manage_pengguna';
        $page_data['page_title'] = 'manage_pengguna';
        $page_data['user'] = $this->Md_pengguna->getPenggunaAll();
        $this->load->view('index', $page_data);
    }

    /**     LABEL*    * */
    
    /**     * MANAGE LOG* * */
    function log($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('login') != 1)
            redirect(base_url() . 'lawang', 'refresh');
        $page_data['page_name'] = 'log';
        $page_data['page_title'] = 'log';
        $page_data['statistik'] = $this->Md_log->getLogAll();
        $this->load->view('index', $page_data);
    }

    /**     * GANTI PASSWORD* * */
    function ganti_password($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('login') != 1)
            redirect(base_url() . 'lawang', 'refresh');

        if ($param1 == 'edit' && $param2 == 'do_update') {
            //$data['username'] = $this->input->post('username');
            $plama = $this->input->post('plama');
            $pbaru = $this->input->post('pbaru');
            $pkonf = $this->input->post('pkonf');

            $cekpwd = $this->Md_pengguna->checkLoginbyID($this->session->userdata('user_id'));

            if (isset($cekpwd)) {
                if ($this->encryption->decrypt($cekpwd[0]->password) == $plama) {
                    if ($pbaru == $pkonf) {
                        $data['password'] = $this->encryption->encrypt($pbaru);
                        $this->Md_pengguna->updatePengguna($this->session->userdata('user_id'), $data);

                        //log ganti password
                        $log['ip'] = $this->input->ip_address();
                        $log['jenis_aksi'] = 'Etc';
                        $log['keterangan'] = 'Ganti Password';
                        $log['tgl'] = date('Y-m-d');
                        $log['jam'] = date('H:i:s');
                        $log['pengguna_id'] = $this->session->userdata('user_id');
                        $log['status'] = 1;
                        $this->Md_log->addLog($log);
                        //end log ganti password

                        $this->session->set_flashdata('flash_message', 'Password berhasil di ganti!');
                    } else {
                        $this->session->set_flashdata('flash_message', 'Password baru dan konfirmasi anda tidak sama!');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', 'Password di masukkan salah!');
                }
            } else {
                $this->session->set_flashdata('flash_message', 'Password di masukkan salah!');
            }
            redirect(base_url() . 'spadmin/ganti_password/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_yayasan'] = $this->Md_katalogg->getHalaman($param2);
        }

        $page_data['page_name'] = 'ganti_password';
        $page_data['page_title'] = 'ganti_password';
        $this->load->view('index', $page_data);
    }



}
