<?php

class About extends Controller {
    public function index()
    {
        $data['judul'] = 'about';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
       // public function index($nama = 'Nadhif', $pekerjaan = 'mahasiswa', $umur = 23)
    // {
    //     $data['nama'] = $nama;
    //     $data['pekerjaan'] = $pekerjaan;
    //     $data['umur'] = $umur;
    //     $data['judul'] = 'about me';
    //     $this->view('templates/header', $data);
    //     $this->view('about/index', $data);
    //     $this->view('templates/footer');
    // }
}