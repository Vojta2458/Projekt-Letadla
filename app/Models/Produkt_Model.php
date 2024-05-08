<?php

namespace App\Models;
use CodeIgniter\Model;

class Produkt_Model extends Model
{
    protected $table        = 'produkt';
    protected $primaryKey   = 'produkt_id';
    protected $returnType   = 'object';
    protected $allowedFields = ['produkt_nazev', 'produkt_popis', 'produkt_id', 'produkt_cena', 'produkt_datum_vyroby', 'produkt_typ_dilu'];

    public function update_this($id, $data)
    {
        $builder = $this->db->table('produkt');
        $builder->where('produkt_id', $id);
        $builder->update($data);
    }


    public function delete_this($id)
{
    $builder = $this->db->table('produkt');
    $builder->delete(['produkt_id' => $id]);
}
}