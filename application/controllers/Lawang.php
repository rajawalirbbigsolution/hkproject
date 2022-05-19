<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lawang extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Md_pengguna');
        $this->load->model('Md_log');
        $this->load->helper('encrypt_helper');
        $this->load->library('user_agent');
        $this->load->library('encryption');

        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation','Recaptcha'));

        date_default_timezone_set('Asia/Jakarta');

        /* cash control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

    /*     * *default functin, redirects to login page if no admin logged in yet** */

    public function index() {
        date_default_timezone_set('Asia/Jakarta');

        if ($this->session->userdata('login_type') == 'pegawai')
            redirect(base_url() . 'spadmin/dashboard', 'refresh');
        if ($this->session->userdata('login_type') == 'spadmin')
            redirect(base_url() . 'spadmin/dashboard', 'refresh');

        $config = array(
            array(
                'field' => 'login_type',
                'label' => 'Account Type',
                'rules' => 'required|xss_clean'
            ),
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|xss_clean'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|xss_clean|callback__validate_login'
            )
        );

        $this->form_validation->set_rules($config);
        $this->form_validation->set_message('_validate_login', $this->input->post('login_type') . ' Login failed!');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">×</button>', '</div>');

        if ($this->form_validation->run() == FALSE || !isset($response['success']) || $response['success'] <> true) {
            $page_data['captcha']=$this->recaptcha->getWidget();
            $page_data['script_captcha']=$this->recaptcha->getScriptTag();
			$page_data['a']="0";
            $this->load->view('lawang', $page_data);
        } else {
            //log dashboard
            $log['ip'] = $this->input->ip_address();
            $log['jenis_aksi'] = 'Login';
            $log['keterangan'] = 'Login';
            $log['tgl'] = date('Y-m-d');
            $log['jam'] = date('H:i:s');
            $log['pengguna_id'] = $this->session->userdata('user_id');
            $log['status'] = 1;
            $this->Md_log->addLog($log);
            //end log dashboard

            if ($this->session->userdata('login_type') == 'spadmin')
                redirect(base_url() . 'spadmin/dashboard', 'refresh');

            if ($this->session->userdata('login_type') == 'pegawai')
                redirect(base_url() . 'spadmin/dashboard', 'refresh');
        }
    }

    /*     * *validate login*** */

    

    function _validate_login() {
        $this->form_validation->set_rules('username', ' ', 'trim|required');
        $this->form_validation->set_rules('password', ' ', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
 
        $recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);
 
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');
        //  || !isset($response['success']) || $response['success'] <> true
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('flash_message', 'Invalid captcha!');
	    return FALSE;
        } else {
            if ($this->input->post('username') == '' or $this->input->post('password') == '') {
                $this->session->set_flashdata('flash_message', 'login_failed1');
                return FALSE;
            }
            $data = $this->Md_pengguna->checkLogin($this->input->post('username'));

            if (isset($data)) {
                $row = $data[0];
                if ($this->input->post('password') == $this->encryption->decrypt($row->password)) {
                    if ($row->level == '1') {
                        $this->session->set_userdata('login_type', 'spadmin');
                        $this->session->set_userdata('login', 1);
                        $this->session->set_userdata('jenis_pengguna', 'spadmin');
                        $this->session->set_userdata('nama', $row->nama);
                        $this->session->set_userdata('user_id', $row->pengguna_id);
                    }
                     if ($row->level == '2') {
                      $this->session->set_userdata('login_type', 'spadmin');
                      $this->session->set_userdata('login', 1);
                      $this->session->set_userdata('jenis_pengguna', 'pegawai');
                      $this->session->set_userdata('user_id', $row->pengguna_id);
                      $this->session->set_userdata('nama', $row->nama);
                      }
                     
                    return TRUE;
                } else {
                    $this->session->set_flashdata('flash_message', 'Invalid username or password!1');
                    return FALSE;
                }
            } else {
                $this->session->set_flashdata('flash_message', 'Invalid username or password!2');
                return FALSE;
            }
        }
    }

    /*     * *****LOGOUT FUNCTION ****** */

    function logout() {

        //log dashboard
        $log['ip'] = $this->input->ip_address();
        $log['jenis_aksi'] = 'Logout';
        $log['keterangan'] = 'Logout';
        $log['tgl'] = date('Y-m-d');
        $log['jam'] = date('H:i:s');
        $log['pengguna_id'] = $this->session->userdata('user_id');
        $log['status'] = 1;
        $this->Md_log->addLog($log);
        //end log dashboard

        $this->session->unset_userdata(array('login_type', 'login', 'user_id'));
        $this->session->sess_destroy();
        $this->session->set_flashdata('flash_message', 'logged_out');
        redirect(base_url() . 'lawang', 'refresh');
    }

    /*     * *DEFAULT NOR FOUND PAGE**** */

    function four_zero_four() {
        $this->load->view('four_zero_four');
    }

    /*     * *RESET AND SEND PASSWORD TO REQUESTED EMAIL*** */

    function reset_password() {
        $account_type = $this->input->post('account_type');
        if ($account_type == "") {
            redirect(base_url(), 'refresh');
        }
        $email = $this->input->post('email');
        $result = $this->email_model->password_reset_email($account_type, $email); //SEND EMAIL ACCOUNT OPENING EMAIL
        if ($result == true) {
            $this->session->set_flashdata('flash_message', get_phrase('password_sent'));
        } else if ($result == false) {
            $this->session->set_flashdata('flash_message', get_phrase('account_not_found'));
        }
    }

    /*     * *LOGIN AS ANOTHER USER LIKE DOCTOR,PATIENT,PHARMACIST,LABORATORIST ETC***** */

    function login_as($user_type = '', $user_id = '') {
        $this->session->set_userdata('login_type', $user_type);
        $this->session->set_userdata($user_type . '_login', '1');
        $this->session->set_userdata($user_type . '_id', $user_id);
        redirect(base_url() . 'index.php?' . $user_type . '/dashboard', 'refresh');
    }

}
