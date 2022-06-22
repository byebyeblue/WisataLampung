<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table            = 'pemesanan';
    protected $primaryKey       = 'id_pemesanan ';
    protected $allowedFields    = ['nama_lengkap', 'no_identitas', 'no_hp', 'tgl_kunjungan', 'pengunjung_dws', 'pengunjung_ank', 'harga', 'total_bayar', 'id_tempat'];
}
