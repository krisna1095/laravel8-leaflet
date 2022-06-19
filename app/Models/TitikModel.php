<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TitikModel extends Model
{


    protected $table = 'titik';
    protected $fillable = ['desa_id', 'posyandu', 'alamat', 'long', 'lat'];
    public function allData()
    {
        $results = DB::table('titik')
            ->select('id', 'posyandu', 'long', 'lat', 'alamat')
            ->get();
        return $results;
    }
    public function allDesa()
    {
        $results = DB::table('desa')
            ->select('id', 'id_kecamatan', 'nama',)
            ->get();
        return $results;
    }
    public function getData($id = '')
    {
        $results = DB::table('titik')
            ->select('id', 'desa_id', 'posyandu')
            ->where('id', $id)
            ->get();
        return $results;
    }
    public function getDesa($id = '')
    {
        $results = DB::table('desa')
            ->select('id', 'id_kecamatan', 'nama')
            ->where('id', $id)
            ->get();
        return $results;
    }
    public function desaModel()
    {
        return $this->belongsTo(DesaModel::class);
    }
}
