<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;

class equipoController extends Controller
{
    public function index($id_equipo)
    {
        $equipo = Equipo::find($id_equipo);
        return $equipo;
    }

    public function store(Request $request)
    {
        //validación de los datos
        $request->validate([
            'id_equipo' => 'required|unique:equipos,id_equipo',
            'id_campeonato' => 'required',
            'nombre' => 'required',
            'pais' => 'required'
        ]);
        //alta de equipo
        $equipo = new Equipo;
        $equipo->id_equipo = $request->input('id_equipo');
        $equipo->id_campeonato = $request->input('id_campeonato');
        $equipo->nombre = $request->input('nombre');
        $equipo->pais = $request->input('pais');
        $equipo->save();

    }

    public function show()
    {
        $equipo = Equipo::All();
        return $equipo;
    }

    public function viewId($id_equipo)
    {
        $equipo = Equipo::find($id_equipo,['nombre']);
        return $equipo;
    }

    public function update(Request $request, $id_equipo)
    {
        $equipo = Equipo::find($id_equipo);
        $equipo -> update($request->all());
    }

    public function destroy( $id_equipo)
    {
        $equipo = Equipo::destroy($id_equipo);
        return $equipo;
    }
}
