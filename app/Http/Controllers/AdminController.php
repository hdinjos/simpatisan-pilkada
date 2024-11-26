<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tps;
use App\Models\Simpatisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where("role", "KOOR")->get();
        return view('admin/koordinators/index', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/koordinators/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        if ($request->username) {

            $findUserExist = User::where('username', '=', $request->username)->first();
            if ($findUserExist != null) {
                return  redirect('/admins/koordinators/create');
            }
        }

        // dd($request->hasFile('image'));

        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');

            $imageHasname = $image->hashName();

            $image->storeAs('foto', $imageHasname, 'public');

            User::create([
                'name'      => $request->name,
                'username'    => $request->username,
                'password'    => Hash::make($request->password),
                'image' => $imageHasname,
                'role' => "KOOR",
            ]);
            return redirect('/admins/koordinators');
        } else {
            return  redirect('/admins/koordinators/create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $users = Simpatisan::where("user_id", $id)->get();
        return view('admin/koordinators/detail', compact('users'));
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

        if ($request->user_id && $id) {

            $record = Simpatisan::where([
                ['id', $id],
                ['user_id', $request->user_id]
            ])->first();
            if ($record) {
                unlink(storage_path('app/public/image_ktp/' . $record->foto_ktp));
                unlink(storage_path('app/public/image_self/' . $record->foto_self));
                $record->delete();
            }
            return redirect('/admins/koordinators/detail/' . $request->user_id);
        }
        return redirect('/admins/koordinators/detail/' . $request->user_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {}

    public function koordinatorDelete(Request $request,)
    {
        if ($request->id) {
            $record = User::find($request->id);

            if ($record) {
                unlink(storage_path('app/public/foto/' . $record->image));
                $record->delete();
                return redirect('/admins/koordinators');
            }
            return redirect('/admins/koordinators');
        }
        return redirect('/admins/koordinators');
    }

    public function changePasswordForm($id)
    {
        return view('admin/koordinators/changepassword', compact('id'));
    }


    public function changePassword(Request $request)
    {
        if ($request->new_password && $request->user_id) {
            $user = User::find($request->user_id);
            if ($user) {
                $hashPass = Hash::make($request->new_password);
                $user->update(['password' => $hashPass]);
                return  redirect('/admins/koordinators')->with('success', 'Ganti Password Berhasil');
            }
            return  redirect('/admins/koordinators')->with('failed', 'Ganti Password Gagal');
        }

        return  redirect('/admins/koordinators')->with('failed', 'Ganti Password Gagal');
    }

    public function indexTps(Request $request)
    {

        $tps = Tps::join('saksis', 'saksis.id', '=', 'tps.saksi_id')
            ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone')
            ->get();

        return view('admin/koordinators/tps', compact('tps'));
    }

    public function calcTps(Request $request)
    {
        // Return a JSON response

        $tps = null;
        // dd($request->filled('kecamatan'));
        $kecamatan = $request->kecamatan;
        $suara = $request->suara;
        $isPaslon1 = $request->suara == 'paslon1';
        $isPaslon2 = $request->suara == 'paslon2';
        $isTidakSah = $request->suara == 'tidak_sah';
        $totalPaslon1 = 0;
        $totalPaslon2 = 0;
        $totalTidakSah = 0;
        $totalAll = 0;

        if (!$request->filled('kecamatan') && !$request->filled('suara')) {
            $query = Tps::join('saksis', 'saksis.id', '=', 'tps.saksi_id')
                ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone');

            $tps = $query->get();
            $totalPaslon1 = $query->sum("paslon1");
            $totalPaslon2 = $query->sum("paslon2");
            $totalTidakSah = $query->sum("tidak_sah");
            $totalAll = $totalPaslon1 + $totalPaslon2 + $totalTidakSah;
        }

        if ($request->filled('kecamatan') && $request->filled('suara')) {

            if ($isPaslon1) {
                $query = Tps::where('kecamatan', $kecamatan)
                    ->join('saksis', 'saksis.id', '=', 'tps.saksi_id')
                    ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone');
                $tps = $query->get();
                $totalPaslon1 = $query->sum("paslon1");
                $totalPaslon2 = 0;
                $totalTidakSah = 0;
                $totalAll = $totalPaslon1 + $totalPaslon2 + $totalTidakSah;
            } else if ($isPaslon2) {
                $query = Tps::where('kecamatan', $kecamatan)
                    ->join('saksis', 'saksis.id', '=', 'tps.saksi_id')
                    ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone');
                $tps = $query->get();
                $totalPaslon1 = 0;
                $totalPaslon2 = $query->sum("paslon2");
                $totalTidakSah = 0;
                $totalAll = $totalPaslon1 + $totalPaslon2 + $totalTidakSah;
            } else if ($isTidakSah) {
                $query = Tps::where('kecamatan', $kecamatan)
                    ->join('saksis', 'saksis.id', '=', 'tps.saksi_id')
                    ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone');
                $tps = $query->get();
                $totalPaslon1 = 0;
                $totalPaslon2 = 0;
                $totalTidakSah = $query->sum("tidak_sah");
                $totalAll = $totalPaslon1 + $totalPaslon2 + $totalTidakSah;
            }
        } else if ($request->filled('kecamatan')) {
            $query = Tps::where('kecamatan', $kecamatan)
                ->join('saksis', 'saksis.id', '=', 'tps.saksi_id')
                ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone');
            $tps = $query->get();
            $totalPaslon1 = $query->sum("paslon1");
            $totalPaslon2 = $query->sum("paslon2");
            $totalTidakSah = $query->sum("tidak_sah");
            $totalAll = $totalPaslon1 + $totalPaslon2 + $totalTidakSah;
        } else if ($request->filled('suara')) {
            if ($isPaslon1) {
                $query = Tps::join('saksis', 'saksis.id', '=', 'tps.saksi_id')
                    ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone');
                $tps = $query->get();
                $totalPaslon1 = $query->sum("paslon1");
                $totalPaslon2 = 0;
                $totalTidakSah = 0;
                $totalAll = $totalPaslon1 + $totalPaslon2 + $totalTidakSah;
            } else if ($isPaslon2) {
                $query = Tps::join('saksis', 'saksis.id', '=', 'tps.saksi_id')
                    ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone');
                $tps = $query->get();
                $totalPaslon1 = 0;
                $totalPaslon2 = $query->sum("paslon2");
                $totalTidakSah = 0;
                $totalAll = $totalPaslon1 + $totalPaslon2 + $totalTidakSah;
            } else if ($isTidakSah) {
                $query = Tps::join('saksis', 'saksis.id', '=', 'tps.saksi_id')
                    ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone');
                $tps = $query->get();
                $totalPaslon1 = 0;
                $totalPaslon2 = 0;
                $totalTidakSah = $query->sum("tidak_sah");
                $totalAll = $totalPaslon1 + $totalPaslon2 + $totalTidakSah;
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Data received successfully',
            'data' => $tps,
            'totalPaslon1' => $totalPaslon1,
            'totalPaslon2' => $totalPaslon2,
            'totalTidakSah' => $totalTidakSah,
            'totalAll' => $totalAll,
        ]);
    }

    public function calcTpsFirst()
    {
        // Return a JSON response

        $totalPaslon1 = 0;
        $totalPaslon2 = 0;
        $totalTidakSah = 0;
        $totalAll = 0;

        $query = Tps::join('saksis', 'saksis.id', '=', 'tps.saksi_id')
            ->select('tps.*', 'saksis.name as saksi_name', 'saksis.phone');

        $tps  = $query->get();

        $totalPaslon1 = $query->sum("paslon1");
        $totalPaslon2 = $query->sum("paslon2");
        $totalTidakSah = $query->sum("tidak_sah");
        $totalAll = $totalPaslon1 + $totalPaslon2 + $totalTidakSah;
        return response()->json([
            'success' => true,
            'message' => 'Data received successfully',
            'data' => $tps,
            'totalPaslon1' => $totalPaslon1,
            'totalPaslon2' => $totalPaslon2,
            'totalTidakSah' => $totalTidakSah,
            'totalAll' => $totalAll,

        ]);
    }
}
