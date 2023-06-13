<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function Crear(Request $request){
        $p = new Persona();

        $p -> nombre = $request -> post('nombre');
        $p -> apellido = $request -> post('apellido');

        $p -> save();

        return redirect("/")->with("creado",true);
    }

    public function Listar(Request $request){
        $p = Persona::all();

        return view("listar",[
            "personas" => $p
        ]);
    }

    public function Detalles(Request $request, $idPersona){
        $p = Persona::findOrFail($idPersona);

        return view("detalles",[
            "persona" => $p
        ]);
    }

    public function Modificar(Request $request){
        $persona = Persona::findOrFail($request -> post("id"));
        $persona -> nombre = $request -> post("nombre");
        $persona -> apellido = $request -> post("apellido");
        $persona -> save();

        return redirect("/personas/" . $request -> post("id"))
            ->with("modificado",true);
    }

    public function Eliminar(Request $request, $idPersona){
        $persona = Persona::findOrFail($idPersona);

        $persona -> delete();

        return redirect("/")->with("eliminado",true);
    }
}
