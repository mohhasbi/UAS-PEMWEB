<?php
namespace App\Models;
use CodeIgniter\Model;

class Warga_model extends Model
{
    protected $table = 'warga';

    public function getWarga($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveWarga($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editWarga($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }

    public function hapusWarga($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
 
}