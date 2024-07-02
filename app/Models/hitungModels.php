<?php

namespace App\Models;

use CodeIgniter\Model;

class hitungModels extends Model
{
    protected $table = 'dataset';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_desa', 'k1', 'k2', 'k3', 'k4', 'k5', 'label'];
}
