<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index()
    {
        $manages = UserData::all();
        return view('manage.index', compact('manages'));
    }

    public function create()
    {
        return view('manage.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'about' => 'nullable|string',
            'photo' => 'nullable|string',
            'firstname' => 'nullable|string',
            'lastname' => 'nullable|string',
            'email' => 'nullable|string',
            'country' => 'nullable|string',
            'street' => 'nullable|string',
            'description' => 'nullable|string',
            'zip' => 'required|numeric',
        ]);
        UserData::create($data);
        return redirect()->route('manage.index');
    }

    public function edit($id)
    {
        $manages = UserData::find($id);
        return view('manage.edit', compact('manages'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
           'username' => 'required|string|max:255',
            'about' => 'nullable|string',
            'photo' => 'nullable|file|mimes:jpeg,png,gif|max:10240',
            'firstname' => 'nullable|string',
            'lastname' => 'nullable|string',
            'email' => 'nullable|string',
            'country' => 'nullable|string',
            'street' => 'nullable|string',
            'description' => 'nullable|string',
            'zip' => 'required|numeric',
        ]);
        UserData::where('id', $id)->update($data);  // assuming 'id' is the correct primary key
        return redirect()->route('manage.index');
    }

    public function destroy($id)
    {
        UserData::where('id', $id)->delete();  // assuming 'id' is the correct primary key
        return redirect()->route('manage.index');
    }
}
