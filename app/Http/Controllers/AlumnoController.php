<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Grado;
use Illuminate\Http\Request;

/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::where("estado","=","1")->paginate();

        return view('alumno.index', compact('alumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = new Alumno();
        $grados = Grado::where('estado', '=', "1")->pluck("nombre","id_grado");
        return view('alumno.create', compact('alumno', 'grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alumno::$rules);

        $alumno = Alumno::create($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);

        return view('alumno.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        $grados = Grado::where('estado', '=', "1")->pluck("nombre","id_grado");
        return view('alumno.edit', compact('alumno', 'grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Alumno::$rules);

        $alumno = Alumno::find($id);
		// $alumno->id_alumno = $request->id_alumno;
		$alumno->apellidos = $request->apellidos;
		$alumno->carnet = $request->carnet;
		$alumno->id_grado = $request->id_grado;
		$alumno->nombre_de_madre = $request->nombre_de_madre;
		$alumno->nombre_de_padre = $request->nombre_de_padre;
		$alumno->edad = $request->edad;
		$alumno->nota_final = $request->nota_final;
		// $alumno->estado = $request->estado;

        $alumno->save();
        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $grado = Alumno::find($id);
        $grado->estado = 2;
        $grado->save();

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno deleted successfully');
    }
}
