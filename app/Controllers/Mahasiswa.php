<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;

class Mahasiswa extends BaseController
{
    public function index()
    {


        $builder = $this->db->table('mahasiswa');
        $query   = $builder->get()->getResult();
        $data['mhs'] = $query;

        return view('mahasiswa/get', $data);
    }

    public function create()
    {
        return view('mahasiswa/add');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->db->table('mahasiswa')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(base_url('mahasiswa'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('mahasiswa')->getWhere(['id_mhs' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['mhs'] = $query->getRow();
                return view('mahasiswa/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('mahasiswa')->where(['id_mhs' => $id])->update($data);
        return redirect()->to(base_url('mahasiswa'))->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $this->db->table('mahasiswa')->where(['id_mhs' => $id])->delete();
        return redirect()->to(base_url('mahasiswa'))->with('success', 'Data Berhasil Dihapus');
    }
}
