<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class auth extends CI_Controller {
    public function index($error = NULL) {
        $data = array(
            'title' => 'login Page',
            'action' => site_url('auth/home'),
            'error' => $error
        );
        $this->load->view('login', $data);
    }
    public function login() {
        $this->load->model('auth_model');
        $login = $this->auth_model->login($this->input->post('username'), md5($this->input->post('password')));
        if ($login == 1) {
//          ambil detail data
            $row = $this->auth_model->data_login($this->input->post('username'), md5($this->input->post('password')));
//          daftarkan session
            $data = array(
                'logged' => TRUE,
                'username' => $row->username
            );
            $this->session->set_userdata($data);
//            redirect ke halaman sukses
            redirect(site_url('tb_user'));

        } else {
//            tampilkan pesan error
            $error = 'username / password salah';
            $this->index($error);
        }
    }
    function logout() {
//        destroy session
        $this->session->sess_destroy();
//        redirect ke halaman login
        redirect(site_url('auth.php'));
    }
}
/* End of file auth.php */
/* Location: ./application/controllers/auth.php */