<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use File;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin/profile/index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id],
            'image' => ['image', 'max:2048'],

        ]);

        $user = Auth::user();
        //Se existe a image ele apaga antes de colocar uma nova
        if ($request->hasFile('image')){
            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }
            $image = $request->image;
            $imageName = rand() . '-msflix-' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName );

            //Caminho da pasta de imagens
            $path = "/uploads/" . $imageName;
            $user->image = $path;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();


        return redirect()->back()->with('success', 'Dados atualizados com sucesso!');

    }
}
