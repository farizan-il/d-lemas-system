<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation'); 
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/topbar');
        $this->load->view('admin/InputSiswa'); 
        $this->load->view('layout/sidebar');
        $this->load->view('layout/footer');
    }

    public function TampilData()
    {

        $this->form_validation->set_rules(
            'nisn', 
            'nisn siswa',
            'required|exact_length[12]',
            [
                'required' => 'NISN siswa Harus diisi',
                'exact_length' => 'NISN harus terdiri dari 12 karakter' 
            ]
        );

        if ($this->form_validation->run() == false) { 
            $this->load->view('InputSiswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nisn' => $this->input->post('nisn'),
                'kelas' => $this->input->post('kelas'),
                'tanggalLahir' => $this->input->post('tanggalLahir'),
                'tempatLahir' => $this->input->post('tempatLahir'),
                'alamat' => $this->input->post('alamat'),
                'jenisKelamin' => $this->input->post('jenisKelamin'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('admin/TampilDataSiswa', $data);
        }
    }

}

/* End of file Admin.php and path \application\controllers\admin\Admin.php */
