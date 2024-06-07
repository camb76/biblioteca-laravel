<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
   
    public function index()
    {
      $persons= person::all();
      return view("persons.index", compact("persons"));
    }

    
    public function create()
    {
        return view("persons.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|min:5|max:100',
            'age'=> 'required|integer||min:1',
            'caracteristicas'=> 'nullable|array',
             
        ]);
        
       $person= person::create($request->all());
        return response()->json($person, 201);
        return redirect()->route('persons.index');
    }

 
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        $person= person::findOrFail($id);
        return view('persons.edit', compact("person"));
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=> 'required|string|min:5|max:100',
            'age'=> 'required|integer||min:1'
             
        ]);
        $person= person::findOrFail($id);
        $person->update($request->all());
        return redirect()->route('persons.index');
    }

  
    public function destroy(string $id)
    {
        $person= person::findOrFail($id);
        $person -> delete();
        return redirect()->route('persons.index');

    }
}
