<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function save_pics_path(Request $request){
        $request->validate([
            'profile_pics'=> 'required|image|max:2048'
        ]);
        if ($request->hasFile('profile_pics')) {
            $image = $request->file('profile_pics');
            $pics_path = $image->store('pics', 'public');
            auth()->user()->update(['profile_pics' => $pics_path]);
           // dd($pics_path);
            return redirect()
            ->route('dash')
            ->with('msg', 'Profile picture uploaded successfully.');
        }
    }
}
