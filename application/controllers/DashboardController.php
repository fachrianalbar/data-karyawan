<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $session = $this->session->userdata("uuid");
        $user = $this->db->get_where('tm_user', ['uuid' => $session])->row_array();
        $this->email = $user['email'];
        $this->role = $user['role'];
    }

    public function admin()
    {
        if ($this->role == "1") {
            $bio = $this->db->get('biodata')->result_array();
        } else {
            $bio = $this->db->get_where('biodata', ["email" => $this->email])->result_array();
        }
        $data = [
            "judul" => "Data Pelamar",
            "biodata" => $bio,
            "email" => $this->email
        ];
        $this->load->view("layout/header", $data);
        $this->load->view("admin/index", $data);
        $this->load->view("layout/footer");
    }

    public function user()
    {
        $data = [
            "judul" => "Biodata Pelamar",
            "agama" => $this->db->get('tm_agama')->result_array(),
            "status" => $this->db->get('tm_status')->result_array(),
            "email" => $this->email
        ];
        $config = [
            ['field' => 'posisi', 'label' => 'Posisi yang dilamar', 'rules' => 'required'],
            ['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
            ['field' => 'ktp', 'label' => 'No KTP', 'rules' => 'required'],
            ['field' => 'tmp_lahir', 'label' => 'Tempat Lahir', 'rules' => 'required'],
            ['field' => 'tgl_lahir', 'label' => 'Tanggal Lahir', 'rules' => 'required'],
            ['field' => 'jk', 'label' => 'Jenis Kelamin', 'rules' => 'required'],
            ['field' => 'agama', 'label' => 'Agama', 'rules' => 'required'],
            ['field' => 'alamat_ktp', 'label' => 'Alamat KTP', 'rules' => 'required'],
            ['field' => 'alamat_tinggal', 'label' => 'Alamat Tempat Tinggal', 'rules' => 'required'],
            ['field' => 'status', 'label' => 'Status', 'rules' => 'required'],
        ];
        $this->form_validation->set_rules($config);
        $this->form_validation->set_message('required', '{field} tidak boleh kosong');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/index", $data);
            $this->load->view("layout/footer");
        } else {
            $this->save();
        }
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);
        $biodata = [
            "uuid" => $this->uuid->v5(date("Y-m-d")),
            "posisi_lamar" => $post['posisi'],
            "nama" => $post['nama'],
            "ktp" => $post['ktp'],
            "tempat_lahir" => $post['tmp_lahir'],
            "tanggal_lahir" => $post['tgl_lahir'],
            "jk" => $post['jk'],
            "agama" => $post['agama'],
            "status" => $post['status'],
            "gol_darah" => $post['gol_darah'],
            "alamat_ktp" => $post['alamat_ktp'],
            "alamat_tinggal" => $post['alamat_tinggal'],
            "email" => $post['email'],
            "tlp" => $post['tlp'],
            "tlp_org" => $post['hporg'],
            "skill" => $post['skill'],
            "kantor" => $post['kantor'],
            "gaji_harap" => str_replace(",", "", $post['gaji_harap'])
        ];

        $insert = $this->db->insert("biodata", $biodata);

        $pendidikan = count($post['pend_terakhir']);
        for ($i = 0; $i < $pendidikan; $i++) {
            $jenjang = $post['pend_terakhir'][$i];
            $institusi = $post['pend_nama'][$i];
            $jurusan = $post['pend_jurusan'][$i];
            $tahun_lulus = $post['tahun_lulus'][$i];
            $ipk = $post['pend_ipk'][$i];

            $row_pend = [
                "ktp" => $post['ktp'],
                "jenjang_pendidikan" => $jenjang,
                "nama_instansi" => $institusi,
                "jurusan" => $jurusan,
                "tahun_lulus" => $tahun_lulus,
                "ipk" => $ipk,
            ];

            $this->db->insert('detail_pendidikan', $row_pend);
        }

        $pelatihan = count($post['seminar']);
        for ($i = 0; $i < $pelatihan; $i++) {
            $nama_pelatihan = $post['seminar'][$i];
            $tahun_pelatihan = $post['tahun_seminar'][$i];

            $rowpelatihan = [
                "ktp" => $post['ktp'],
                "nama_pelatihan" => $nama_pelatihan,
                "tahun_pelatihan" => $tahun_pelatihan
            ];

            $this->db->insert('detail_pelatihan', $rowpelatihan);
        }

        $pekerjaan = count($post['perusahaan']);
        for ($i = 0; $i < $pekerjaan; $i++) {
            $perusahaan = $post['perusahaan'][$i];
            $posisi_terakhir = $post['posisi_terakhir'][$i];
            $gaji = $post['gaji'][$i];
            $tahun_pekerjaan = $post['tahun_pekerjaan'][$i];

            $rowpekerjaan = [
                "ktp" => $post['ktp'],
                "nama_perusahaan" => $perusahaan,
                "posisi_terakhir" => $posisi_terakhir,
                "gaji_terakhir" => $gaji,
                "tahun_pekerjaan" => $tahun_pekerjaan
            ];

            $this->db->insert('detail_pekerjaan', $rowpekerjaan);
        }

        if ($insert) {
            $pesan = "Data Berhasil di simpan";
            $this->session->set_flashdata('sukses', $pesan);
            redirect('admin');
        } else {
            $pesan = "gagal Menyimpan Data";
            $this->session->set_flashdata('gagal', $pesan);
            redirect('admin');
        }
    }

    public function detail()
    {
        $uuid = $this->uri->segment(2);
        $bio = $this->db->get_where("biodata", ["uuid" => $uuid])->row_array();
        $pendidikan = $this->db->get_where("detail_pendidikan", ["ktp" => $bio['ktp']])->result_array();
        $pelatihan = $this->db->get_where("detail_pelatihan", ["ktp" => $bio['ktp']])->result_array();
        $pekerjaan = $this->db->get_where("detail_pekerjaan", ["ktp" => $bio['ktp']])->result_array();

        $data = [
            "judul" => "Detail Biodata Pelamar",
            "biodata" => $bio,
            "pendidikan" => $pendidikan,
            "pelatihan" => $pelatihan,
            "pekerjaan" => $pekerjaan,
            "email" => $this->email

        ];

        $this->load->view("layout/header", $data);
        $this->load->view("admin/detailView", $data);
        $this->load->view("layout/footer");
    }

    public function delete()
    {
        $uuid = $this->uri->segment(2);
        $this->db->where(["uuid" => $uuid]);
        $result = $this->db->delete('biodata');

        if ($result) {
            $pesan = "Data Berhasil di Hapus";
            $this->session->set_flashdata('sukses', $pesan);
            redirect('admin');
        } else {
            $pesan = "Data Gagal di Hapus";
            $this->session->set_flashdata('gagal', $pesan);
            redirect('admin');
        }
    }
}
