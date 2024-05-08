<?php

namespace App\Models;
use CodeIgniter\Model;

class Vyrobce_Model extends Model
{
    protected $table        = 'vyrobce_letadla';
    protected $primaryKey   = 'vyrobce_id';
    protected $returnType   = 'object';
    
}