<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view("users/create");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);

        return redirect()->route('user.index');
    }

    public function edit(User $user)
    {
        return view("users/edit", [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user->update($data);

        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }
}
