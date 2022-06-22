<?php

namespace App\Models;

use CodeIgniter\Model;

class TempatwisataModel extends Model
{
    protected $table            = 'tempatwisata';
    protected $primaryKey       = 'id_pemesanan';
    protected $allowedFields    = ['nama_tempat', 'kota', 'harga', 'foto', 'video', 'deskripsi'];
}
