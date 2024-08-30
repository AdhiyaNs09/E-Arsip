<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->builder->select('users.id as userid, username, email, name, group_id');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        // Ambil semua roles dari auth_groups
        $roles = $this->db->table('auth_groups')->get()->getResult();

        $data = [
            'users' => $query->getResult(),
            'roles' => $roles,  // Kirim data roles ke view
            'title' => 'Daftar User',
        ];

        return view('user/index_v', $data);
    }


    public function update($id)
    {
        if (!in_groups('admin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Ambil data dari form
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
        ];

        // Update data user
        $this->builder->where('id', $id);
        $this->builder->update($data);

        // Update group_id di tabel auth_groups_users
        $groupData = [
            'group_id' => $this->request->getPost('name'),  // 'name' di sini mewakili group_id yang dipilih
        ];

        $this->db->table('auth_groups_users')
            ->where('user_id', $id)
            ->update($groupData);

        return redirect()->to('/user')->with('message', 'Data user dan role berhasil diperbarui.');
    }

}
