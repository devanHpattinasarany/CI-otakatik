<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
// use \App\Models\KelasModel;

class Kelas extends ResourcePresenter
{

    protected $modelName = 'App\Models\KelasModel';

    // function __construct()
    // {
    //     // $this->kelasModel = new KelasModel();
    // }
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {

        $data['kls'] = $this->model->findAll();
        return view('kelas/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        return view('kelas/new');
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return redirect()->to(base_url('kelas'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $kls = $this->model->where('id_kelas', $id)->first();
        if (is_object($kls)) {
            $data['kls'] = $kls;
            return view('kelas/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->model->update($id, $data);
        return redirect()->to(base_url('kelas'))->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->where('id_kelas', $id)->delete();
        return redirect()->to(base_url('kelas'))->with('success', 'Data Berhasil Dihapus');
    }
}
