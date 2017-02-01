<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('control-panel.users.index', compact('users'));
    }

    public function edit($id)
    {
        try {

            $user = User::findOrFail($id);
            $roles = Role::orderBy('id', 'desc')->pluck('name', 'id');
            return view('control-panel.users.edit', compact('user', 'roles'));

        } catch (ModelNotFoundException $e) {
            dd($e);
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index');
        }

    }

    public function activate(Request $request, $id)
    {
        try {

            $user = User::findOrFail($id);

            $user->active = $request->active;
            if ($user->update()) {
                return redirect()->back();
            }

        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global', $e);
            return redirect()->back();
        }

    }

}
