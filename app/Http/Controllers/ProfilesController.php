<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class ProfilesController extends Controller
{
    public  function index(User $user){
            return view('profiles.index',[
            'user' => $user,
        ]);
    }
    public function edit(User $user){
        $this->authorize('update',$user->profile);
        return view('profiles.edit',compact('user'));
    }
    public function update(User $user)
    {
        $validated = Request()->validate([
            'title'       => 'required|unique:posts|max:255',
            'description' => 'required',
            'url'         => "url",
            'image'       => '',
        ]);
       if(request('image')){
        $imagePath = Request()->image->store('profile', 'public');
        $image     = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
        $image->save();
       }
      
       auth()->user()->profile->update(array_merge(
        $validated,
        ['image' => $imagePath]
       ));

       return redirect("/profile/{$user->id}");
    }
}
