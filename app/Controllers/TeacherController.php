<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class TeacherController extends BaseController
{
    protected $teacherModel;

    public function __construct()
    {
        $this->teacherModel = model("Teacher");
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Guru',
            'teachers' => $this->teacherModel->getGuru(),
        ];
        return view('teachers/index_v', $data);
    }

    public function new()
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };

        $data = [
            'title' => 'Form Tambah Data Guru',
        ];
        return view('teachers/create_v', $data);
    }
    public function create()
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };

        $data = [
            'nama_guru' => $this->request->getPost('nama_guru'),
            'nip' => $this->request->getPost('nip'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak')
        ];
        if ($this->teacherModel->save($data) === false) {
            return redirect()->back()->withInput()->with('errors', $this->teacherModel->errors());
        };

        return redirect()->to(site_url('teacher'))->with('message', 'Data guru berhasil ditambahkan');
    }


    public function edit($id)
    {

        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $data = [
            'title' => 'Form Edit Data guru',
            'teachers' => $this->teacherModel->getGuru($id),

        ];
        return view('teachers/edit_v', $data);
    }

    public function update($id)
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };

        $data = [
            'nama_guru' => $this->request->getPost('nama_guru'),
            'nip' => $this->request->getPost('nip'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak')
        ];

        if ($this->teacherModel->update($id, $data) === false) {
            return redirect()->back()->withInput()->with('errors', $this->teacherModel->errors());
        }

        return redirect()->to('/teacher')->with('message', 'Data guru berhasil diperbarui.');
    }

    public function delete($id)
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };

        $this->teacherModel->delete($id);
        return redirect()->to('/teacher')->with('message', 'Data guru berhasil dihapus');
    }
}
