<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class ProfileController extends Controller
{

    public function edit()
    {
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user=User::find(Auth::id());
        $request->validate([
            'name' => 'required',
            'email'=>'required|email|unique:users,email,' . Auth::id(),
        ]);
        $request_data = $request->except(['img', 'password']);
        if ($request->img) {
            Storage::disk('public')->delete('users/' . $user->img);
            $img = Image::make($request->img)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })
                ->encode('webp', 90);
            Storage::disk('public')->put('users/'. $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();
        }

        if ($request->password != "") {

            $request->validate([
                'password' => 'required|confirmed',
            ]);
            $request_data['password'] = bcrypt($request->password);

        }
        $user->update($request_data);

        session()->flash('success','Successfully Updated!');
        return redirect()->back();
    }
}
