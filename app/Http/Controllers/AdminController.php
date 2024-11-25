<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
