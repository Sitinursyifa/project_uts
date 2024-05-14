<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table = 'petugas'; 
    protected $primaryKey = 'id_petugas'; 

    protected $allowedFields = ['nama', 'posisi', 'alamat'];

    /**
     * Mengamb
     *
     * @param int|null $id 
     * @return array|null Data dak.
     */
    public function getpetugas($id = null)
    {
        if ($id === null) {
            return $this->findAll(); 
        }

        return $this->find($id); 
    }

    /**
     * Menyimpan data
     * @param array 
     * @return bool True jika berhasil disimpan, dan false jika gagal.
     */
    public function savepetugas($data)
    {
        return $this->insert($data); 
    }

    /**
     * 
     *
     * @param int $id ID yang akan diupdate.
     * @param array $data Data baru untuk tersebut.
     * @return bool True jika berhasil diupdate, dan false jika gagal.
     */
    public function updatepetugas($id, $data)
    {
        return $this->update($id, $data); 
    }

    /**
     
     * @param int $id ID yang akan dihapus.
     * @return bool True jika berhasil dihapus, dan false jika gagal.
     */
    public function deletepetugas($id)
    {
        return $this->delete($id); 
    }
}
