<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Simpatisan;


class KoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // dd(Auth::user()->role);
        $userId = Auth::user()->id;
        $totalSimpatisan = Simpatisan::count();
        $totalSimpatisanMale = Simpatisan::where('gender', 'male')->count();
        $totalSimpatisanFemale = Simpatisan::where('gender', 'female')->count();

        $simpatisanByMe = Simpatisan::where('user_id', $userId)->count();
        $simpatisanByMeMale = Simpatisan::where('user_id', $userId)->where('gender', 'male')->count();
        $simpatisanByMeFeMale = Simpatisan::where('user_id', $userId)->where('gender', 'female')->count();;

        $simpatisans = Simpatisan::where('user_id', $userId)->get();

        return view('koordinator/home/index', compact('totalSimpatisan', 'totalSimpatisanMale', 'totalSimpatisanFemale',  'simpatisanByMe', 'simpatisanByMeMale', 'simpatisanByMeFeMale', 'simpatisans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('koordinator/home/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        if ($request->hasFile('foto_self') && $request->hasFile('foto_ktp')) {

            //upload new image
            $imageSelf = $request->file('foto_self');
            $imageKtp = $request->file('foto_ktp');
            $imageselfHasname = $imageSelf->hashName();
            $imageKtpHasname = $imageKtp->hashName();
            $imageSelf->storeAs('public/image_self', $imageselfHasname);
            $imageKtp->storeAs('public/image_ktp', $imageKtpHasname);

            Simpatisan::create([
                'name'      => $request->name,
                'gender'    => $request->gender,
                'no_tps'    => $request->no_tps,
                'foto_self' => $imageselfHasname,
                'foto_ktp'  => $imageKtpHasname,
                'user_id'   => Auth::user()->id,

            ]);
            return redirect('/koordinators');
        } else {
            return $this()->index;
        }
        // dd($request->name);
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
