<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Usuarios;
use Illuminate\Http\Request;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuarios::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = Rol::all();
		return view('usuarios.nuevo', compact('rol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Usuarios();
        $usuarios->edad = $request->edad;
        $usuarios->apellido = $request->apellido;
        $usuarios->nombre = $request->nombre;
        $usuarios->rolid = $request->rolid;
        $usuarios->save();
        return redirect('/')->with('info','usuario se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $Usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $Usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $Usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Rol::all();
        $usuarios = Usuarios::find($id);
        return view('usuarios.edit', compact('id','usuarios','rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $Usuarios
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $request)
    {
        $usuarios = Usuarios::where('id', '=', $id)->first();
        $usuarios = Usuarios::find($id);
        $usuarios->edad = $request->edad;
        $usuarios->apellido = $request->apellido;
        $usuarios->nombre = $request->nombre;
        $usuarios->rolid = $request->rolid;
        $usuarios->save();
        return redirect('/')->with('info','usuario se creo correctamente','id');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $Usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::find($id);
		$usuarios->delete();
        return back()->with('info','el producto fue eliminado correctamente', 'id');
    }
}
