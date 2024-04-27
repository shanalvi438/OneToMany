<?php

namespace App\Http\Controllers;

use App\Models\Boy;
use App\Models\Girl;
use Illuminate\Http\Request;

class BoyController extends Controller
{
    public function index()
    {
        $boys = Boy::all();
        return view('boys.index', compact('boys'));
    }

    public function create($id)
    {
        $data = Girl::findOrFail($id);
        // dd($data);
        return view('boys.create',compact('data'));
    }

    public function store(Request $request)
    {
        // Validation logic here

            // Boy::create($request->all);
        $value = new Boy;
        $value->name = $request->name;
        $value->girl_id = $request->girl_id;
        // dd($value);
                $value->save();
        
        return redirect()->route('boys.index');
    }

    public function show(Boy $boy)
    {
        return view('boys.show', compact('boy'));
    }

    public function edit(Boy $boy)
    {
        return view('boys.edit', compact('boy'));
    }

    public function update(Request $request, Boy $boy)
    {
        // Validation logic here

        $boy->update($request->all());
        return redirect()->route('boys.index');
    }

    public function destroy(Boy $boy)
    {
        $boy->delete();
        return redirect()->route('boys.index');
    }
}
