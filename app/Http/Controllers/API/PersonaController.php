<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index($id)
    {
        $persona = Persona::find($id);
        return $persona;
    }

    public function store(Request $request)
    {
        //validación de los datos
        $request->validate([
            'id_equipo' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'rol' => 'required',
            'ci' => 'required|unique:personas,ci',
            'genero' => 'required',
            'fechaNac' => 'required',
            'pais' => 'required',
        ]);
        //alta de persona
        $persona = new Persona;
        $persona->id_equipo = $request->input('id_equipo');
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->rol = $request->input('rol');
        $persona->ci = $request->input('ci');
        $persona->genero = $request->input('genero');
        $persona->fechaNac = $request->input('fechaNac');
        $persona->pais = $request->input('pais');
        $persona->save();

    }

    public function show()
    {
        $persona = Persona::All();
        return $persona;
    }

    public function viewPersona($nombre)
    {
        $persona = Persona::find($nombre);
        return $persona;
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona -> update($request->all());
    }

    public function destroy( $id)
    {
        $persona = Persona::destroy($id);
        return $persona;
    }
}
