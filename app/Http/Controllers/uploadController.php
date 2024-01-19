<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function save_pics_path(Request $request){
        $request->validate([
            'profile_pics'=> 'required|file'
        ]);
        $pics_path = $request->store();
        $id = auth()->user()->id;
        $savetodb = User::find($id)
        ->profile_pics()->create([
            'profile_pics' => $pics_path,
        ]);

    }
    public function getPicsForm(){
        return view('');
    }
}
