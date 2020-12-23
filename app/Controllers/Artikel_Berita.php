<?php
namespace App\Controllers;
use App\Models\Berita_Model;

class Artikel_Berita extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->beritaModel = new Berita_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataBerita'] = $this->beritaModel->findAll();

        echo view('artikel_berita_v', $data);        
    }
}