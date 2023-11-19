<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Session;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class UserController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::whereRoleNot(['superadministrator'])->get();

        $users=User::whereRoleNot(['superadministrator'])
            ->whenSearch(request()->search)
            ->whenRole(request()->role_id)
            ->with('roles')
            ->paginate(5);
        return view('dashboard.users.index',compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::whereRoleNot(['superadministrator'])->get();
        return view('dashboard.users.create',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->role_id);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed',
            'role_id'=>'required|numeric',
        ]);
        $request->merge(['password'=>bcrypt($request->password)]);
        $request_data = $request->except(['img']);

        if ($request->img) {
            $img = Image::make($request->img)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })
                ->encode('webp', 90);
            Storage::disk('public')->put('users/'. $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();
        }
        $user=User::create($request_data);
        $user->addRole($request->role_id);
        session()->flash('success','Successfully Created !');
        return redirect()->route('dashboard.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles=Role::whereRoleNot(['superadministrator'])->get();

        $user=User::find($id);
        return view('dashboard.users.edit',compact('roles','user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email,' . $id,
            'role_id'=>'required|numeric',
        ]);
        $user=User::find($id);


        $request_data = $request->except(['img']);
        if ($request->img) {
            Storage::disk('public')->delete('users/' . $user->img);
            $img = Image::make($request->img)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })
                ->encode('webp', 90);
            Storage::disk('public')->put('users/'. $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();
        }

        $user->update($request_data);
        $user->syncRoles([$request->role_id]);
        session()->flash('success','Successfully updated !');
        return redirect()->route('dashboard.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();

        Session::flash('success','Successfully deleted !');
        return redirect()->route('dashboard.users.index');
    }

    public function ban($id)
    {

        $user = User::find($id);
        if ($user) {
            $user->update([
                'status'=>'ban'
            ]);

            return redirect()->route('dashboard.users.index');
        } else
            return response()->json(['message' => 'error'], 404);
    }

    public function unban($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->update([
                'status'=>'active'
            ]);
            return redirect()->route('dashboard.users.index');
        } else
            return response()->json(['message' => 'error'], 404);
    }
}
