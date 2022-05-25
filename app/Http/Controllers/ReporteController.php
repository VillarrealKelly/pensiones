<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pensiones;
use App\User;
use App\Estudiantes;
use DB;             
use Auth;
use PDF;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        //
         //dd('holi');
       $usuarios=User::all();
        $pensiones=Pensiones::all();
        $estudiantes=Estudiantes::all();
        return view('reportes.index')
         ->with('pensiones',$pensiones)
         ->with('estudiantes',$estudiantes)
            ->with('usuarios',$usuarios)

     // ->with('desde',$desde)
        // ->with('est_id',$est_id)
         //->with('hasta',$hasta)   
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
     public function reportes(Request $request)
    {
        //
        $pensiones=DB::select("
            SELECT * FROM estudiantes est 
LEFT JOIN pensiones p ON p.pen_id=est.est_id 
and p.pen_fecha BETWEEN '2022-05-01' AND '2022-05-25' AND est.est_id=1 and p.pen_estado=0         ");


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
