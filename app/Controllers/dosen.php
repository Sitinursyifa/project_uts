<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    protected $dosenModel;

    public function __construct()
    {
        $this->dosenModel = new DosenModel();
    }

    public function index()
    {
        $data['dosen'] = $this->dosenModel->findAll();
        return view('dosen/index', $data);
    }

    public function create()
    {
        return view('dosen/create');
    }

    public function store()
    {
        $rules = [
            'nidn' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'matkul' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nidn' => $this->request->getVar('nidn'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'matkul' => $this->request->getVar('matkul')
        ];

        // Simpan data ke database menggunakan model
        $this->dosenModel->save($data);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['dosen'] = $this->dosenModel->find($id);
        return view('dosen/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nidn' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'matkul' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nidn' => $this->request->getVar('nidn'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'matkul' => $this->request->getVar('matkul')
        ];

        // Update data ke database menggunakan model
        $this->dosenModel->update($id, $data);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Hapus data dari database menggunakan model
        $this->dosenModel->delete($id);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil dihapus.');
    }
}
