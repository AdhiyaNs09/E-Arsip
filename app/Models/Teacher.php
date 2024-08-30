<?php

namespace App\Models;

use CodeIgniter\Model;

class Teacher extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'guru_id';
    protected $allowedFields = ['nama_guru', 'nip', 'alamat', 'kontak'];

    protected $validationRules = [
        'nama_guru' => 'required|min_length[3]|max_length[100]',
        'nip' => 'required|numeric|min_length[10]|max_length[50]',
        'alamat' => 'required|min_length[5]',
        'kontak' => 'required|min_length[10]|max_length[50]',
    ];

    protected $validationMessages = [
        'nama_guru' => [
            'required' => 'Nama guru harus diisi.',
            'min_length' => 'Nama guru minimal terdiri dari 3 karakter.',
            'max_length' => 'Nama guru maksimal terdiri dari 100 karakter.',
        ],
        'nip' => [
            'required' => 'NIP guru harus diisi.',
            'numeric' => 'NIP harus berupa angka.',
            'min_length' => 'NIP minimal terdiri dari 10 karakter.',
            'max_length' => 'NIP maksimal terdiri dari 50 karakter.',
        ],
        'alamat' => [
            'required' => 'Alamat harus diisi.',
            'min_length' => 'Alamat minimal terdiri dari 5 karakter.',
        ],
        'kontak' => [
            'required' => 'Kontak harus diisi.',
            'min_length' => 'Kontak minimal terdiri dari 10 karakter.',
            'max_length' => 'Kontak maksimal terdiri dari 50 karakter.',
        ],
    ];

    public function getGuru($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }
}
