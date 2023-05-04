<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //
    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'dni'=>"required",
                "nombre"=>"required"
            ]
        );

        $existsAlumno = !Alumno::where("dni",$request->input('dni'))->get()->isEmpty();

        if($existsAlumno){
            return redirect()->route('alumno.create')->with("message","Ya existe un alumno con el dni: ".$request->input('dni'))->with("status","danger");
        }

        $alumno = new Alumno();
        $alumno->nombre = $request->input('nombre');
        $alumno->dni = $request->input('dni');
        $alumno->save();

        

        return redirect()->route('home')->with("message","alumno creado correctamente")->with("status","success");
    }
    public function show($alumno)
    {
        # code...
        $alumno = Alumno::with('certificados')->where('id',$alumno)->first();
        return view('alumnos.show',compact('alumno'));
    }
}
