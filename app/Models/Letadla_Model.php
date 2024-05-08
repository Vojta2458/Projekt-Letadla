<?php

namespace App\Models;
use CodeIgniter\Model;

class Letadla_Model extends Model
{
    protected $table        = 'letadlo';
    protected $primaryKey   = 'letadlo_id';
    protected $returnType   = 'object';
    protected $allowedFields = ['letadlo_nazev', 'vyrobce_letadlo_vyrobce_id', 'letadlo_id'];

    public function update_this($id, $data)
    {
        $builder = $this->db->table('letadlo');
        $builder->where('letadlo_id', $id);
        $builder->update($data);
    }


    public function delete_this($id)
{
    $builder = $this->db->table('letadlo');
    $builder->delete(['letadlo_id' => $id]);
}
}