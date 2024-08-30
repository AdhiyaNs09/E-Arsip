<?php

namespace App\Models;

use CodeIgniter\Model;

class Classroom extends Model
{
    protected $table            = 'kelas';
    protected $primaryKey       = 'kelas_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kelas', 'wali_kelas', 'ruang_kelas'];

    public function getKelas($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
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

    // Validation rules
    protected $validationRules      = [
        'nama_kelas' => 'required|min_length[3]|max_length[100]',
        'wali_kelas' => 'required|min_length[3]|max_length[100]',
        'ruang_kelas' => 'required',
    ];
    //validation messages
    protected $validationMessages   = [
        'nama_kelas' => [
                'required' => 'Nama kelas wajib diisi',
                'min_length' => 'Nama kelas harus memiliki setidaknya 3 karakter',
                'max_length' => 'Nama kelas tidak boleh lebih dari 100 karakter'
            ],
            'wali_kelas' => [
                'required' => 'Wali kelas wajib diisi',
                'min_length' => 'Wali kelas harus memiliki setidaknya 3 karakter',
                'max_length' => 'Wali kelas tidak boleh lebih dari 100 karakter'
            ],
            'ruang_kelas' => [
                'required' => 'Wali kelas wajib diisi',
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
