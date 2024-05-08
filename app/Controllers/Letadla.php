<?php

namespace App\Controllers;
use App\Models\Letadla_Model as LModel;
use App\Models\Vyrobce_Model as VModel;
use App\Models\Produkt_Model as PModel;

class Letadla extends BaseController
{
    var $pModel;
    
    function __construct() {
        $this->lModel = new LModel();
        $this->vModel = new VModel();
        $this->pModel = new PModel();
    }

    public function pridat(): string
    {
        return view('addForm');
    }

    public function pridat_hotovo(): string
    {
        $Produkt_Model = new PModel();
        $nazev = $this->request->getVar('produkt_nazev');
        $popis = $this->request->getVar('produkt_popis');
        $datum = date('Y-m-d');
        $Produkt_Model->insert([ 
            'produkt_nazev' => $nazev,
            'produkt_popis' => $popis, 
            'produkt_datum_vyroby' => $datum
        ]);

        return view('produkty');
    }
}
