<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = new User;
        if ($request->query('search')) {
            $users = $users->where('name', 'like', '%' . $request->query('search') . '%');
        }
        $users = $users->paginate(10)->appends(request()->query());
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique(User::class, 'email')],
            'password' => 'required',
            'jabatan' => 'nullable',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Created User Successfully'
        ]);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('user.edit', compact('user'));
    }

    public function edit($id)
    {
        return view('user.edit');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique(User::class, 'email')->ignore($id)],
            'password' => 'nullable',
            'jabatan' => 'nullable',
        ]);

        $updated = [
            'name' => $request->name,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
        ];
        if ($request->password) {
            $updated['password'] = Hash::make($request->password);
        }

        User::where('id', $id)->update($updated);
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Updated User Successfully'
        ]);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Deleted User Successfully'
        ]);
    }
}
