<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tps;


class TpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tps = Tps::where('user_id', Auth::user()->id)->get();
        return view('koordinator.tps.index', compact('tps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('koordinator.tps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('c1')) {

            //upload new image
            $imageC1 = $request->file('c1');

            $imageC1Hasname = $imageC1->hashName();

            $imageC1->storeAs('tps', $imageC1Hasname, 'public');


            Tps::create([
                'nama_tps' => $request->nama_tps,
                'paslon1' => $request->paslon1,
                'paslon2' => $request->paslon2,
                'tidak_sah' => $request->tidak_sah,
                'c1' => $imageC1Hasname,
                'user_id'   => Auth::user()->id,

            ]);
            return redirect('/koordinators/' . Auth::user()->id . '/tps')->with('success', 'Tambah Data Berhasil');
        } else {
            return redirect('/koordinators/' . Auth::user()->id . '/tps');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
