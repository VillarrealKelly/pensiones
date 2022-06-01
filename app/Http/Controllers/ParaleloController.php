<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paralelo;
use DB;
class ParaleloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $paralelo=paralelo::all();
        return view('paralelo.index')
        ->with('paralelo',$paralelo)
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
        $paralelo=paralelo::all();
        return view('paralelo.create')
        ->with('paralelo',$paralelo);

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
        paralelo::create($data);
        return redirect(route('paralelo'));
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
        $paralelo=paralelo::find($id);
        return view('paralelo.edit')
        ->with('paralelo',$paralelo);
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

        $p=paralelo::find($id);
        $p->update($request->all());
        return redirect(route('paralelo'));
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
           $paralelo=DB::select("SELECT * FROM paralelo where par_id=$id");
        if (empty($paralelo)){
            $sms="Eliminado correctamente";
         Representantes::destroy($id);
            
        
         }else{
            $sms=" No se puede eliminar ";
         }
         //Session::put('sms',$sms);
         echo "<h1 style='background:red;color:white'>
         $sms
         <a href='".route('paralelo')."'>Volver a paralelo</a>
         <h1>";

         
    }
}
