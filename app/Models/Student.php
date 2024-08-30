<?php

namespace App\Models;

use CodeIgniter\Model;

class Student extends Model
{
    protected $table            = 'siswa';
    protected $primaryKey       = 'siswa_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_siswa', 'nisn', 'kelas_id', 'alamat', 'kontak'];
    
    public function getSiswaWithKelas()
    {
        return $this->select('siswa.*, kelas.nama_kelas')
                    ->join('kelas', 'kelas.kelas_id = siswa.kelas_id')
                    ->findAll();
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
        'nama_siswa' => 'required|min_length[3]|max_length[100]',
        'nisn' => 'required|min_length[3]|max_length[100]',
        'kelas_id' => 'required',
        'alamat' => 'required|min_length[3]|max_length[100]',
        'kontak' => 'required|min_length[3]|max_length[100]',
    ];
    protected $validationMessages   = [
        'nama_siswa' => [
            'required' => 'Nama wajib diisi',
            'min_length' => 'Nama harus memiliki setidaknya 3 karakter',
            'max_length' => 'Nama tidak boleh lebih dari 100 karakter'
        ],
        'nisn' => [
            'required' => 'NIS wajib diisi',
            'min_length' => 'NIS harus minimal 3 karakter',
            'max_length' => 'NIS tidak boleh lebih dari 100 karakter'
        ],
        'kelas_id' => [
            'required' => 'Kelas wajib diisi',            
        ],
        'alamat' => [
            'required' => 'Alamat wajib diisi',
            'min_length' => 'Kelas harus minimal 3 karakter',
            'max_length' => 'Kelas tidak boleh lebih dari 100 karakter'
        ],
        'kontak' => [
            'required' => 'Kontak wajib diisi',
            'min_length' => 'Kontak harus minimal 3 karakter',
            'max_length' => 'Kontak tidak boleh lebih dari 100 karakter'
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
