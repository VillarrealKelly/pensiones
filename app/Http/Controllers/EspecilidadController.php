<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use DB;
class EspecilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   
        $especialidad=especialidad::all();
        return view('especialidad.index')
        ->with('especialidad',$especialidad)
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
        $especialidad=especialidad::all();
        return view('especialidad.create')
        ->with('especialidad',$especialidad);
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
        Especialidad::create($data);
        return redirect(route('especialidad'));
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
         $especialidad=Especialidad::find($id);
        return view('especialidad.edit')
        ->with('especialidad',$especialidad)
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
              $e=Especialidad::find($id);
        $e->update($request->all());
        return redirect(route('especialidad'));
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
        $especialidad=DB::select("SELECT * FROM especialidad where esp_id=$id");
        if (empty($especialidad)){
            $sms="Eliminado correctamente";
         Representantes::destroy($id);
            
        
         }else{
            $sms=" No se puede eliminar ";
         }
         //Session::put('sms',$sms);
         echo "<h1 style='background:red;color:white'>
         $sms
         <a href='".route('especialidad')."'>Volver a especialidad</a>
         <h1>";
         
    }
}
