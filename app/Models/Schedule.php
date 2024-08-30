<?php

namespace App\Models;

use CodeIgniter\Model;

class Schedule extends Model
{
    protected $table            = 'jadwal';
    protected $primaryKey       = 'jadwal_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kelas_id', 'mapel_id', 'guru_id', 'hari', 'jam_mulai', 'jam_akhir', 'jam_selesai'];

    public function getScheduleWithClassroom()
    {
        $jadwal = $this->join('kelas', 'kelas.kelas_id = jadwal.kelas_id')
            ->join('mapel', 'mapel.mapel_id = jadwal.mapel_id')
            ->join('guru', 'guru.guru_id = jadwal.guru_id')
            ->findAll();

        // Konversi jam_mulai dan jam_selesai ke objek DateTime
        foreach ($jadwal as &$item) {
            $item['jam_mulai'] = new \DateTime($item['jam_mulai']);
            $item['jam_selesai'] = new \DateTime($item['jam_selesai']);
        }

        return $jadwal;
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
        'kelas_id' => 'required',
        'mapel_id' => 'required',
        'guru_id' => 'required',
        'hari' => 'required',
        'jam_mulai' => 'required',
        'jam_selesai' => 'required',
    ];
    protected $validationMessages   = [
        'kelas_id' => [
            'required' => 'Kelas harus diisi',
        ],
        'mapel_id' => [
            'required' => 'Mapel harus diisi',
        ],
        'guru_id' => [
            'required' => 'Guru harus diisi',
        ],
        'hari' => [
            'required' => 'Hari harus diisi',
        ],
        'jam_mulai' => [
            'required' => 'Jam Mulai harus diisi',
        ],
        'jam_selesai' => [
            'required' => 'Jam Selesai harus diisi',
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
