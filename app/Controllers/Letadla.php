<?php

namespace App\Controllers;
use App\Models\Letadla_Model as LModel;
use App\Models\Vyrobce_Model as VModel;
use App\Models\Produkt_Model as PModel;
use Config\UserConfig;

class Letadla extends BaseController
{
    var $pModel;
    
    function __construct() {
        $this->lModel = new LModel();
        $this->vModel = new VModel();
        $this->pModel = new PModel();
    }

    public function vytvorit() {
        $data["title"] = "Formulář";
        echo view('addItem', $data);
    } 
    public function vytvorit_hotovo(){
        $produkt_nazev = $this->request->getPost('produkt_nazev');
        $produkt_datum_vyroby = $this->request->getPost('produkt_datum_vyroby');
        $produkt_popis = $this->request->getPost('produkt_popis');

        $data = array(
            'produkt_nazev' => $produkt_nazev,
            'produkt_datum_vyroby' => $produkt_datum_vyroby,
            'produkt_popis' => $produkt_popis
        );
        $this->pModel->save($data);
        return redirect()->route('/');
    }

    public function edit(){
        $data["title"] = "Editace";
        $config = new UserConfig();
        $data ["seznam"] = $this -> pModel -> orderBy('produkt_id', 'asc')-> paginate($config->pagerDomu);
        $data ["pager"] = $this -> pModel -> pager;
        return view('edit', $data);
    }

    public function editForm() {
        $data["title"] = "Formulář";
        echo view('addForm', $data);
    }

    public function delete() {
        $produkt_id = $this->request->getPost('produkt_id');
        $data["title"] = "Formulář";
        $return = $this->pModel->delete($produkt_id);
        return redirect()->route('/');
    }

    public function editCat($produkt_nazev) {
        $data["title"] = "Formulář";
        $data["seznam"] = $this -> pModel -> find($produkt_nazev);
        echo view('editForm', $data);
    }
    public function upravit() {
        $produkt_id = $this -> request->getPost('produkt_id');
        $produkt_nazev = $this->request->getPost('produkt_nazev');
        $produkt_produkt__vyroby = $this->request->getPost('produkt_produkt__vyroby');
        $produkt_popis = $this->request->getPost('produkt_popis');


        $data = array(
            'produkt_id'=> $produkt_id,
            'produkt_nazev' => $produkt_nazev,
            'produkt_produkt__vyroby' => $produkt_produkt__vyroby,
            'produkt_popis' => $produkt_popis 
        );
       $this->pModel->save($data);
       return redirect()->route('/');
    }
}
