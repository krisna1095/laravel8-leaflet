<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TitikModel;

class TitikController extends Controller
{
    public function __construct()
    {
        $this->TitikModel = new TitikModel();
    }

    public function index()
    {
        $results=$this->TitikModel->allData();
        return view ('home',['titik'=>$results]);
    }

    public function titik()
    {
        $results = $this->TitikModel->allData();
        return json_encode($results);
    }
}
