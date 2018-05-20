<?php

Class Guru extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_guru');
    }

    function index() {
        $data['guru'] = $this->db->get('guru')->result();
        $this->template->load('template', 'Guru/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $uploads = $this->upload();
            $this->Model_guru->add($uploads);
            echo $this->session->set_flashdata('Berhasil', 'Berhasil Menambahkan Guru....');
            redirect('Admin/Guru');
        } else {
            $this->template->load('template', 'Guru/list');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_guru->edit();
            echo $this->session->set_flashdata('edit', 'Berhasil edit Guru....');
            redirect('Admin/Guru');
        } else {

            $id = $this->uri->segment(4);
            $data['guru'] = $this->db->get_where('guru', array('nik' => $id))->row_Array();
            $this->template->load('template', 'Guru/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('nik', $id);
        $this->db->delete('guru');
        echo $this->session->set_flashdata('Hapus', 'Berhasil Menghapus Guru....');
        redirect('Admin/Guru');
    }

    function upload() {
        $config['upload_path'] = './Uploads/guru/';
        $config['allowed_types'] = 'png|jpg';
        $config['max_size'] = 8000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

    function update() {
        if (isset($_POST['submit'])) {
            if (!empty($this->session->userdata('nis'))) {

                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                );
                $this->db->where('nis', $this->session->userdata('nis'));
                $this->db->update('siswa', $data);
            } elseif (!empty($this->session->userdata('nik'))) {

                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                );
                $this->db->where('nik', $this->session->userdata('nik'));
                $this->db->update('guru', $data);
            } else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                );
                $this->db->where('id', $this->session->userdata('id'));
                $this->db->update('pengguna', $data);
            }
        }
       echo $this->session->set_flashdata('Update', 'Berhasil Update password....');
        redirect('Admin/Dashboard');
    }

}

?>