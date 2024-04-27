<?php

namespace App\Http\Controllers;

use App\Models\Girl;
use Illuminate\Http\Request;

class GirlController extends Controller
{
    public function index()
    {
        $girls = Girl::all();
        // dd($girls);
        return view('girls.index', compact('girls'));
    }

    public function create()
    {
        return view('girls.create');
    }

    public function store(Request $request)
    {
        // Validation logic here

        $value = new Girl;
        $value->name = $request->name;
        // dd($value);
        $value->save();
        return redirect()->route('boys.create', ['girl_id' => $value->id]);
    }

    public function show(Girl $girl)
    {
        return view('girls.show', compact('girl'));
    }

    public function edit(Girl $girl)
    {
        return view('girls.edit', compact('girl'));
    }

    public function update(Request $request, Girl $girl)
    {
        // Validation logic here

        $girl->update($request->all());
        return redirect()->route('girls.index');
    }

    public function destroy(Girl $girl)
    {
        $girl->delete();
        return redirect()->route('girls.index');
    }
}
