<?php

namespace App\Models;

use CodeIgniter\Model;

class Study extends Model
{
    protected $table            = 'mapel';
    protected $primaryKey       = 'mapel_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_mapel', 'guru_id'];

    public function getMapelWithGuru()
    {
        return $this->join('guru', 'guru.guru_id = mapel.guru_id')->get()->getResultArray();
    }

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama_mapel' => 'required|min_length[3]',
        'guru_id' => 'required',
    ];
    protected $validationMessages   = [
        'nama_mapel' => [
            'required' => 'Nama harus diisi',
            'min_length' => 'Minimal 3 karakter',
        ],
        'guru_id' => [
            'required' => 'Guru harus diisi',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
