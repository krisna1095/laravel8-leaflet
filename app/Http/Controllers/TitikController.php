<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TitikModel;
use App\Models\DesaModel;
use App\Models\KecamatanModel;
use Illuminate\Support\Facades\DB;

class TitikController extends Controller
{
    public function __construct()
    {
        $this->TitikModel = new TitikModel();
        $this->DesaModel = new DesaModel();
        $this->KecamatanModel = new KecamatanModel();
    }

    public function index()
    {
        $kecamatan = DB::table('kecamatan')
            ->select('id', 'nama')
            ->get();
        $desa = DB::table('desa')
            ->select('id', 'id_kecamatan', 'nama')
            ->get();
        $titik = DB::table('titik')
            ->select('id', 'desa_id', 'posyandu', 'long', 'lat')
            ->join('desa', 'desa.id', '=', 'titik.desa_id')
            ->select('titik.*', 'desa.nama')
            ->get();

        $results = $this->TitikModel->allDesa();
        return view('home', compact('kecamatan', 'desa', 'titik'));
    }

    public function getDesa($id)
    {
        $data = DB::table('desa')->where('id_kecamatan', $id)->pluck("nama", "id", "alamat");

        return response()->json($data);
    }

    public function edit($id)
    {
        // $kecamatan = DB::table('kecamatan')
        //     ->select('kecamatan.id', 'kecamatan.nama')
        //     ->get();
        // $desa = DB::table('desa')
        //     ->select('desa.id', 'desa.id_kecamatan', 'desa.nama')
        //     ->get();
        // $data = TitikModel::where('titik.id', $id)
        //     ->join('desa', 'desa.id', '=', 'titik.desa_id')
        //     ->join('kecamatan', 'kecamatan.id', '=', 'desa.id_kecamatan')
        //     ->select('titik.*', 'desa.nama', 'kecamatan.nama AS nama_kecamatan')
        //     ->get();
        $kecamatan = DB::table('kecamatan')->get();
        $titik = DB::table('titik')->where('id', $id)->first();
        // dd($titik);
        return view('home.edit', compact('titik', 'kecamatan'));
    }

    public function titik()
    {
        $results = $this->TitikModel->allData();
        return json_encode($results);
    }
    public function desa($id)
    {
        $results = $this->TitikModel->getDesa($id);
        return json_encode($results);
    }
    public function store(Request $request)
    {
        if (is_null($request->kecamatan)) {
            return response(['error_message' => 'kecamatan tidak boleh kosong']);
        }
        if (is_null($request->desa)) {
            return response(['error_message' => 'desa tidak boleh kosong']);
        }
        if (is_null($request->posyandu)) {
            return response(['error_message' => 'posyandu tidak boleh kosong']);
        }
        if (is_null($request->lat)) {
            return response(['error_message' => 'Lattitude tidak boleh kosong']);
        }
        if (is_null($request->long)) {
            return response(['error_message' => 'Longtitude tidak boleh kosong']);
        }

        TitikModel::create([
            'desa_id' => $request->get('desa'),
            'posyandu' => $request->get('posyandu'),
            'alamat' => $request->get('alamat'),
            'long' => $request->get('long'),
            'lat' => $request->get('lat')
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        //memanggil model, query dengan kondisi where first
        $data = TitikModel::where('id', $id)->first();
        $data->delete();

        //redirect setelah berhasil simpan data

        return redirect('/');
    }
}
