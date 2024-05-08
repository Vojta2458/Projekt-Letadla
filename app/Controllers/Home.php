<?php

namespace App\Controllers;

use App\Models\Produkt_Model as PModel;

class Home extends BaseController
{
    var $pModel;
    
    function __construct() {
        $this->pModel = new PModel();
    }

    public function index(): string
    {
        $data["seznam"] = $this->pModel->orderBy('produkt_id', 'asc')->findAll();
        return view('produkty', $data);
    }
}
