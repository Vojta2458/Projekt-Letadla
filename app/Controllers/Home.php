<?php

namespace App\Controllers;
use Config\UserConfig;

use App\Models\Produkt_Model as PModel;

class Home extends BaseController
{
    var $pModel;
    
    function __construct() {
        $this->pModel = new PModel();
    }

    public function index(): string
    {
        $config = new UserConfig();
        $data["seznam"] = $this->pModel->orderBy('produkt_id', 'asc')->paginate($config->pagerDomu);
        $data ["pager"] = $this -> pModel -> pager;
        return view('produkty', $data);
    }

    public function detail($produkt_id): string
    {
        $data["seznam"] = $this->pModel->orderBy('produkt_id', 'asc')->find($produkt_id);
        return view('detail_Produkt', $data);
    }
}
