<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pensiones;
use App\User;
use App\Estudiantes;
use DB;
// use PDF;

class PensionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $data=$request->all();
        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');

        if(isset($data['desde'])){// si lehe dado en el botón buscar
        $desde=$data['desde'];
        $hasta=$data['hasta'];

        }
         $pensiones=DB::select("
            SELECT * FROM pensiones p 
            Join users u ON p.usu_id=u.usu_id
            JOIN estudiantes e ON p.est_id=e.est_id
     
            WHERE p.pen_fecha BETWEEN '$desde' AND '$hasta'

            ");
        // if (isset($data['btn_pdf'])) {
        //     $data=['pensiones'=>$pensiones];
        // $pdf= PDF::loadView('pensiones.reporte',$data);
        // return $pdf->stream('reporte.pdf');            
        // }

        return view('pensiones.index')
         ->with('pensiones',$pensiones)
         ->with('desde',$desde)
         ->with('hasta',$hasta)   
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
    }
}
