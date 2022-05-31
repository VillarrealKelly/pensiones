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
           $desde=date('Y-m-d');
        $hasta=date('Y-m-d');
        $estudiantes=estudiantes::all();
        $est_id=0;
        $pen_id=0;
        $usuarios=User::all();
        $pensiones=Pensiones::all();
        
          if(isset($data['desde'])){// si lehe dado en el botón buscar
        $desde=$data['desde'];
        $hasta=$data['hasta'];
 
        

        }
        
        return view('reportes.index')
         ->with('pensiones',$pensiones)
         ->with('estudiantes',$estudiantes)
        ->with('usuarios',$usuarios)
         ->with('est_id',$est_id)
           ->with('desde',$desde)
         ->with('hasta',$hasta)  
         ->with('pen_id',$pen_id);
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
     public function search(Request $request)
    {
        //
        
        $estudiantes=estudiantes::all();
        $usuarios=User::all();
        $pensiones=Pensiones::all();
        $est_id="";
        $pen_est="";
        $sql_est="";
        $sql_pen="";
        $data=$request->all();
     
        if(isset($data['desde'])){
            $desde=$data['desde'];
            $hasta=$data['hasta'];
           

        }
        if(isset($data['est_id'])){
            $est_id=$data['est_id'];
            $sql_est="AND p.est_id=$est_id ";
        }
        if(isset($data['pen_est'])){
            $pen_est=$data['pen_est'];
            $sql_pen="AND p.pen_estado=$pen_est ";
        }

     $reporte=DB::select("SELECT * FROM pensiones p 
        JOIN estudiantes e ON p.est_id=e.est_id
        JOIN users usu ON p.usu_id=usu.usu_id 
        AND p.pen_fecha
        BETWEEN    '$desde' AND '$hasta'
        
        $sql_est
        $sql_pen
        ");

        if(isset($data['btn_pdf'])){
 
            $data=['reporte'=>$reporte];
            $pdf=PDF::loadView('reportes.pdf',$data);
            return $pdf->stream('reportes.pdf');
        }
         




    return view('reportes.index')->with('reporte',$reporte)
         ->with('pensiones',$pensiones)
         ->with('estudiantes',$estudiantes)
         ->with('usuarios',$usuarios)
          ->with('desde',$desde)
          ->with('hasta',$hasta)
         ->with('est_id',$est_id)
         ->with('pen_est',$pen_est) ;
   


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
