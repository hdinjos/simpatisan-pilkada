<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saksi;
use App\Models\Tps;

class SaksiController extends Controller
{
    public function registerForm()
    {
        return view("saksi/register");
    }
    public function register(Request $request)
    {
        $nik = $request->nik;
        $name = $request->name;
        $phone = $request->phone;

        if ($nik && $name && $phone) {
            $data = Saksi::create([
                'nik' => $nik,
                'name' => $name,
                'phone' => $phone,
            ]);

            // dd($data->id);
            return redirect("/saksi/" . $data->id);
        }
        return redirect("/saksi");
    }

    public function index($id)
    {
        $tps = Tps::where('saksi_id', $id)->get();
        return view("saksi/home", compact('id', 'tps'));
    }

    public function create($id)
    {
        return view("saksi/create", compact('id'));
    }

    public function store(Request $request,  $id)
    {

        if ($request->hasFile('c1')) {

            //upload new image
            $imageC1 = $request->file('c1');

            $imageC1Hasname = $imageC1->hashName();

            $imageC1->storeAs('tps', $imageC1Hasname, 'public');

            $nama_tps = $request->nama_tps;
            $kecamatan = $request->kecamatan;
            $kelurahan = $request->kelurahan;
            $paslon1 = $request->paslon1;
            $paslon2 = $request->paslon2;
            $tidak_sah = $request->tidak_sah;
            $c1 = $imageC1Hasname;

            Tps::create([
                'nama_tps' => $nama_tps,
                'kecamatan' => $kecamatan,
                'kelurahan' => $kelurahan,
                'paslon1' => $paslon1,
                'paslon2' => $paslon2,
                'tidak_sah' => $tidak_sah,
                'c1' => $c1,
                'saksi_id'   => $id,
            ]);
            return redirect('/saksi/' . $id)->with('success', 'Tambah Data Berhasil');
        }

        return view("saksi/" . $id . '/create', compact('id'));
    }
}
