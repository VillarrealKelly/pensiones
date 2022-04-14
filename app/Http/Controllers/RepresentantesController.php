<?php

namespace App\Http\Controllers;
use App\Representantes;
use Illuminate\Http\Request;

class RepresentantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd('holi');
         $representantes=Representantes::all();
        ///Carpeta.archivo.blade.php
        return view('representantes.index')
        ->with('representantes',$representantes)///1 nombre que recivimos  2como se llama la variable
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
          $representantes=Representantes::all();
        return view('representantes.create')
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
         $data=$request->all();
        Representantes::create($data);
        return redirect(route('representantes'));
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
         $representantes=Representantes::find($id);
        return view('representantes.edit')
        ->with('representantes',$representantes)
        ;

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
         $r=Representantes::find($id);
        $r->update($request->all());
        return redirect(route('representantes'));
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
         Representantes::destroy($id);
        return redirect(route('representantes'));
    }
}
