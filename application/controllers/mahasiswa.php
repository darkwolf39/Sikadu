<?php 
    class Mahasiswa extends CI_Controller{
        public function index()
        {
            $data['mahasiswa'] = $this->m_mahasiswa->tampil_data()->result();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('mahasiswa', $data);
            $this->load->view('template/footer');
        }


        public function tambah()
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('mahasiswa');
            $this->load->view('template/footer');
        }

        public function tambah_aksi()
        {
            $nim        = $this->input->post('nim');
            $nama       = $this->input->post('nama_mhs');
            $tgl_lahir  = $this->input->post('tgl_lahir');
            $jurusan    = $this->input->post('jurusan');

            $data = array(
                'nim'       =>$nim,
                'nama_mhs'  =>$nama,
                'tgl_lahir' =>$tgl_lahir,
                'jurusan'   =>$jurusan,
            );

            $this->m_mahasiswa->input_data($data,'tb_mahasiswa');
            redirect('mahasiswa/index');
        }


        public function hapus ($nim)
        {
            $where = array ('nim' => $nim);
            $this->m_mahasiswa->hapus_data($where, 'tb_mahasiswa');
            redirect('mahasiswa/index');
        }


        public function edit ($nim)
        {
            $where = array ('nim' => $nim);
            $data['mahasiswa'] = $this->m_mahasiswa->edit_data($where, 'tb_mahasiswa')->result();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('edit', $data);
            $this->load->view('template/footer');
        }


    }

?>
