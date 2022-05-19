<?php

namespace App\Http\Controllers;
use App\Estudiantes;
use App\Representantes;
use DB;
use App\Especialidad;
use App\Paralelo;
use App\Cursos;
use Illuminate\Http\Request;



class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cursos=cursos::all();
        $especialidad=especialidad::all();
        $paralelo=paralelo::all();
        $representantes=representantes::find($id);
        $estudiantes=DB::select("SELECT * FROM  estudiantes 
               JOIN cursos c ON estudiantes.cur_id=c.cur_id
               JOIN paralelo p ON estudiantes.par_id=p.par_id
               JOIN especialidad es ON estudiantes.esp_id=es.esp_id
            join representantes on estudiantes.rep_id=representantes.rep_id where estudiantes.rep_id=$id ");


        return view('estudiantes.index')
        ->with('estudiantes',$estudiantes)
        ->with('representantes',$representantes)
        ->with('cursos',$cursos)
        ->with('especialidad',$especialidad)
        ->with('paralelo',$paralelo)
       ;
       

        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        //dd('create');
       
       $cursos=cursos::all();
       $especialidad=especialidad::all();
       $paralelo=paralelo::all();
       $representantes=Representantes::find($id);
        return view('estudiantes.create')
        ->with('representantes',$representantes)
        ->with('cursos',$cursos)
        ->with('especialidad',$especialidad)
        ->with('paralelo',$paralelo)
       ;
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
          $rep_id=$data['rep_id'];
          $representantes=representantes::all();
        $cursos=cursos::all();
       $especialidad=especialidad::all();
       $paralelo=paralelo::all();
        Estudiantes::create($data);
        return redirect(route('estudiantes',$rep_id));

       
        ;

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
 
       $cursos=cursos::all();
       $especialidad=especialidad::all();
       $paralelo=paralelo::all();
       $estudiantes=Estudiantes::find($id);
       $representantes=Representantes::all();
       return view('estudiantes.edit')
        ->with('estudiantes',$estudiantes)
        ->with('representantes',$representantes)
        ->with('cursos',$cursos)
        ->with('especialidad',$especialidad)
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
