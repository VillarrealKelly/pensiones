<?php

namespace App\Http\Controllers;
use App\Representantes;
use Illuminate\Http\Request;
use DB;

class RepresentantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $representantes=Representantes::all();
       
        return view('representantes.index')
        ->with('representantes',$representantes);
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
        $representantes=DB::select("SELECT * FROM representantes where rep_id=$id");
        if (empty($representantes)){
            $sms="Eliminado correctamente";
         Representantes::destroy($id);
            
        
         }else{
            $sms=" No se puede eliminar ";
         }
         //Session::put('sms',$sms);
         echo "<h1 style='background:red;color:white'>
         $sms
         <a href='".route('representantes')."'>Volver a representantes</a>
         <h1>";
       // return redirect(route('representantes'));
    }
}
