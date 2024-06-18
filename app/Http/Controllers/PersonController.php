<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
   
    public function index()
    {
      $persons= Person::all();
      return view("persons.index", compact("persons"));
    }

    
    public function create()
    {
        return view("persons.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100',
            'age' => 'required|integer|min:1',
            'caracteristicas' => 'nullable|array',
            'caracteristicas.*.descripcion' => 'required_with:caracteristicas.*|string',
            'caracteristicas.*.apellido' => 'required_with:caracteristicas.*|string',
            'caracteristicas.*.identificacion' => 'required_with:caracteristicas.*|integer|min:1',
        ]);

        $caracteristicas = array_filter($request->input('caracteristicas', []), function($caracteristica) {
            return !is_null($caracteristica['descripcion']) && !is_null($caracteristica['apellido']) && !is_null($caracteristica['identificacion']);
        });


        $person = Person::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'caracteristicas' =>$caracteristicas,
        ]);

        return redirect()->route('persons.index')->with('success', 'Person created successfully.');
    }
    

 
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        $person= Person::findOrFail($id);
        return view('persons.edit', compact("person"));
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100',
            'age' => 'required|integer|min:1',
            'caracteristicas' => 'nullable|array',
            'caracteristicas.*.descripcion' => 'required_with:caracteristicas.*|string',
            'caracteristicas.*.apellido' => 'required_with:caracteristicas.*|string',
            'caracteristicas.*.identificacion' => 'required_with:caracteristicas.*|integer|min:1',
           
        ]);
    
        $person = Person::findOrFail($id);
        $person->update([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'caracteristicas' => $request->input('caracteriisticas', []),
        ]);

        return redirect()->route('persons.index')->with('success', 'Person updated successfully.');
    }
  
    public function destroy(string $id)
    {
        $person= Person::findOrFail($id);
        $person -> delete();
        return redirect()->route('persons.index');

    }
}
