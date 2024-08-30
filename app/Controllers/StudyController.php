<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudyController extends BaseController
{
    protected $studyModel;
    protected $teacherModel;
    public function __construct()
    {
        $this->studyModel = model("Study");
        $this->teacherModel = model("Teacher");
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Mata Pelajaran',
            'studies' => $this->studyModel->getMapelWithGuru(),
        ];
        return view('studies/index_v', $data);
    }

    public function new()
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $data = [
            'title' => 'Form Tambah Data Mata Pelajaran',
            'teachers' => $this->teacherModel->findAll(),
        ];
        return view('studies/create_v', $data);
    }

    public function create()
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $data = [
            'nama_mapel' => $this->request->getPost('nama_mapel'),
            'guru_id' => $this->request->getPost('guru_id'),
        ];
        if ($this->studyModel->save($data) === false) {
            return redirect()->back()->withInput()->with('errors', $this->studyModel->errors());
        }
        return redirect()->to('/study');
    }

    public function edit($id)
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $data = [
            'title' => 'Edit Mata Pelajaran',
            'studies' => $this->studyModel->find($id),
            'teachers' => $this->teacherModel->findAll(),
        ];
        return view('studies/edit_v', $data);
    }

    public function update($id)
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $data = [
            'mapel_id' => $id,
            'nama_mapel' => $this->request->getPost('nama_mapel'),
            'guru_id' => $this->request->getPost('guru_id'),
        ];
        if ($this->studyModel->save($data) === false) {
            return redirect()->back()->withInput()->with('errors', $this->studyModel->errors());
        }
        return redirect()->to('/study')->with('message', 'Data mata pelajaran berhasil diperbarui');
    }

    public function delete($id)
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $this->studyModel->delete($id);
        return redirect()->to('/study')->with('message', 'Data mata pelajaran berhasil dihapus');
    }
}
