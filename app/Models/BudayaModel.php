<?php

namespace App\Models;

use CodeIgniter\Model;

class BudayaModel extends Model
{
    protected $table = 'budaya';
    protected $allowedFields = [
        'provinsi',
        'gubernur',
        'jumlah_penduduk',
        'detail_provinsi',
        'pendapatan_perkapita ',
        'judul_budaya',
        'detail_budaya',
        'foto_budaya',
    ];



    // get all budaya 
    public function getAllBuddaya()
    {
        return $this->table('budaya')
            ->select('*')
            ->paginate(5);
    }
}
