<?php

namespace CRUN\Http\Controllers;

use Illuminate\Http\Request;
use CRUN\Test;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all();

        return view('cruns.index', ['tests' => $tests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cruns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

         $this->validate($request,[
            'crun_name' => 'required',
            'crun_sede' => 'required',
            'crun_corte' => 'required',
            'crun_etiqueta' => 'required'
        ]); 
  
          $test = new Test();
          $test->crun_name = $request->crun_name;
          $test->crun_sede = $request->crun_sede;
          $test->crun_corte = $request->crun_corte;
          $test->crun_etiqueta = $request->crun_etiqueta;
  
          $test->save();
  
          return redirect('/tests')->with('success','Creado');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        return view('cruns.show', ['test' => $test]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        return view('cruns.edit', ['test' => $test]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        $this->validate($request,[
            'crun_name' => 'required',
            'crun_sede' => 'required',
            'crun_corte' => 'required',
            'crun_etiqueta' => 'required'
          ]);
  
        //   $test = new Test();
          $test->crun_name = $request->crun_name;
          $test->crun_sede = $request->crun_sede;
          $test->crun_corte = $request->crun_corte;
          $test->crun_etiqueta = $request->crun_etiqueta;
          //$CRUN->corte= $request->corte;
  
          $test->save();
  

        return redirect()->route('tests.index', $test)->with('success', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return redirect('/tests')->with('success','Creado');
    }
}
