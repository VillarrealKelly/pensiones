<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB; 
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios=User::all();
        // dd($usuarios);
        ///Carpeta.archivo.blade.php
        return view('usuarios.index')
        ->with('usuarios',$usuarios)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            // dd($request->all());
        // // $request->all();
        $data=$request->all();
        $data['password']=bcrypt($data['password']);
        User::create($data);
        return redirect(route('usuarios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $usuarios=User::find($id);
        // return view('usuarios.edit')
        // ->with('usuarios',$usuarios)
        // ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $u=User::find($id);
        $u->update($request->all());
        return redirect(route('usuarios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           $usuarios=DB::select("SELECT * FROM users where usu_id=$id");

         if (empty($usuarios)){
            $sms='Eliminado correctamente';
            Estudiantes::destroy($id);

         }else{
            $sms='No se puede eliminar';
         }
             echo "<h1 style='background:red;color:white'>
         $sms
         <a href='".route('usuarios')."'>Volver a usuarios</a>
         <h1>";

    }
}
