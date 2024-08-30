<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ScheduleController extends BaseController
{
    protected $scheduleModel;
    protected $classroomModel;
    protected $studyModel;
    protected $teacherModel;
    public function __construct()
    {
        $this->scheduleModel = model("Schedule");
        $this->classroomModel = model("Classroom");
        $this->studyModel = model("Study");
        $this->teacherModel = model("Teacher");
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Jadwal Pelajaran',
            'schedules' => $this->scheduleModel->getScheduleWithClassroom(),
        ];
        return view('schedules/index_v', $data);
    }

    public function new()
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $data = [
            'title' => 'Form Tambah Data Jadwal Pelajaran',
            'classrooms' => $this->classroomModel->findAll(),
            'studies' => $this->studyModel->findAll(),
            'teachers' => $this->teacherModel->findAll(),
        ];
        return view('schedules/create_v', $data);
    }

    public function create()
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $data = [
            'kelas_id' => $this->request->getPost('kelas_id'),
            'mapel_id' => $this->request->getPost('mapel_id'),
            'guru_id' => $this->request->getPost('guru_id'),
            'hari' => $this->request->getPost('hari'),
            'jam_mulai' => $this->request->getPost('jam_mulai'),
            'jam_selesai' => $this->request->getPost('jam_selesai'),
        ];
        if ($this->scheduleModel->save($data) === false) {
            return redirect()->back()->withInput()->with('errors', $this->scheduleModel->errors());
        }
        return redirect()->to('/schedule')->with('message', 'Data jadwal pelajaran berhasil ditambahkan');
    }

    public function edit($id)
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $data = [
            'title' => 'Form Edit Data Jadwal Pelajaran',
            'schedules' => $this->scheduleModel->find($id),
            'classrooms' => $this->classroomModel->findAll(),
            'studies' => $this->studyModel->findAll(),
            'teachers' => $this->teacherModel->findAll(),
        ];
        return view('schedules/edit_v', $data);
    }

    public function update($id)
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $data = [
            'jadwal_id' => $id,
            'kelas_id' => $this->request->getPost('kelas_id'),
            'mapel_id' => $this->request->getPost('mapel_id'),
            'guru_id' => $this->request->getPost('guru_id'),
            'hari' => $this->request->getPost('hari'),
            'jam_mulai' => $this->request->getPost('jam_mulai'),
            'jam_selesai' => $this->request->getPost('jam_selesai'),
        ];
        if ($this->scheduleModel->save($data) === false) {
            return redirect()->back()->withInput()->with('errors', $this->scheduleModel->errors());
        }
        return redirect()->to('/schedule')->with('message', 'Data jadwal pelajaran berhasil diperbarui');
    }

    public function delete($id)
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };
        $this->scheduleModel->delete($id);
        return redirect()->to('/schedule')->with('message', 'Data jadwal pelajaran berhasil dihapus');
    }
}
