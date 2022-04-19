<?php

namespace App\Http\Controllers;
use App\Estudiantes;
use App\Representantes;
use DB;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes=Estudiantes::all();
         $estudiantes=DB::select("
            SELECT * FROM estudiantes e 
            JOIN representantes r ON e.rep_id=r.rep_id
         

            ");

       // dd('hola');
         //$estudiantes=Estudiantes::all();
        ///Carpeta.archivo.blade.php
        return view('estudiantes.index')
        ->with('estudiantes',$estudiantes)
         ///1 nombre que recivimos  2como se llama la variable
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
        //dd('create');
         $estudiantes=Estudiantes::all();
         $representantes=Representantes::all();
        return view('estudiantes.create')
        ->with('estudiantes',$estudiantes)
        ->with('representantes',$representantes);
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
        //dd('pe');
          $data=$request->all();
        Estudiantes::create($data);
        return redirect(route('estudiantes'));
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
         $estudiantes=Estudiantes::find($id);
       $representantes=Representantes::all();
       return view('estudiantes.edit')
        ->with('estudiantes',$estudiantes)
        ->with('representantes',$representantes);

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
             $estudiantes=Estudiantes::find($id);
        $estudiantes->update($request->all());
        return redirect(route('estudiantes'));
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
        Estudiantes::destroy($id);
        return redirect(route('estudiantes'));
    }
}
