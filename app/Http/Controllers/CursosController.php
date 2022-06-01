<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;
use DB;

class CursosController extends Controller
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
         $cursos=Cursos::all();
        return view('cursos.index')
        ->with('cursos',$cursos)
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
        $cursos=Cursos::all();
        return view('cursos.create')
        ->with('cursos',$cursos);
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
        Cursos::create($data);
        return redirect(route('cursos'));
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
        $cursos=Cursos::find($id);
        return view('cursos.edit')
        ->with('cursos',$cursos)
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
          $c=Cursos::find($id);
        $c->update($request->all());
        return redirect(route('cursos'));

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
           $cursos=DB::select("SELECT * FROM cursos where cur_id=$id");
        if (empty($cursos)){
            $sms="Eliminado correctamente";
         Representantes::destroy($id);
            
        
         }else{
            $sms=" No se puede eliminar ";
         }
         //Session::put('sms',$sms);
         echo "<h1 style='background:red;color:white'>
         $sms
         <a href='".route('cursos')."'>Volver a cursos</a>
         <h1>";
       
    }
}
