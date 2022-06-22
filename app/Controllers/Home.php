<?php

namespace App\Controllers;

use App\Models\PemesananModel;
use App\Models\TempatwisataModel;
use \Dompdf\Dompdf;

class Home extends BaseController
{
    public function index()
    {
        $TempatWisataModel = new TempatWisataModel();
        $wisata = $TempatWisataModel->findAll();
        return view('v_home', ['wisata' => $wisata]);
    }

    public function detail($id)
    {
        $TempatWisataModel = new TempatWisataModel();
        $wisata = $TempatWisataModel->where('id_tempat', $id)->first();
        return view('v_detail', ['wisata' => $wisata]);
    }

    public function daftarharga()
    {
        $TempatWisataModel = new TempatWisataModel();
        $wisata = $TempatWisataModel->findAll();
        return view('v_daftarharga', ['wisata' => $wisata]);
    }

    public function pemesanan()
    {
        $TempatWisataModel = new TempatWisataModel();
        $wisata = $TempatWisataModel->findAll();
        return view('v_pemesanan', ['wisata' => $wisata]);
    }

    public function save()
    {
        $PemesananModel = new PemesananModel();
        $id_pemesanan = $PemesananModel->insert($this->request->getVar());
        return redirect()->to(base_url('/datapesanan/' . $id_pemesanan));
    }

    public function datapesanan($id)
    {
        $PemesananModel = new PemesananModel();
        $pemesanan = $PemesananModel->where('id_pemesanan', $id)->first();
        return view('v_datapesanan', ['pemesanan' => $pemesanan]);
    }

    public function printpdf($id)
    {
        $dompdf = new Dompdf();
        // $faker = \Faker\Factory::create('id_pemesanan');
        $PemesananModel = new PemesananModel();
        $pemesanan = $PemesananModel->where('id_pemesanan', $id)->first();
        $html = view('v_datapesanan', ['pemesanan' => $pemesanan]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("data-pemesanan");
    }
}
