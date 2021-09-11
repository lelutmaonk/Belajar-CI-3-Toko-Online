<?php

class Registrasi extends CI_Controller{

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama tidak boleh kosong !']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username tidak boleh kosong !'] );
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password tidak boleh kosong !', 'matches' => 'Password tidak cocok' ]);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('v_registrasi');
            $this->load->view('templates/footer');
        }else{
            $data = array(
                'id'        => '',
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password_1'),
                'role_id'   => 2,
            );
            $this->db->insert('t_user', $data);

            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Registrasi Berhasil, Silahkan Login !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');

            redirect('auth/login');
        }
    }

}