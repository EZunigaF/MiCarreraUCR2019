<?php

namespace CRUN\Http\Controllers;
use Illuminate\Http\Request;
use CRUN\CRUN;

class CrunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CRUNS = CRUN::all();

        //ocupo una view
        return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
          $user = $request->user();

          //ocupo una view
          return view('xxxxx.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'name' => 'required',
          'sede' => 'required',
          'corte'=> 'required'
        ]);

        $CRUN = new CRUN();
        $CRUN->name = $request->name;
        $CRUN->sede = $request->sede;
        $CRUN->corte= $request->corte;

        $CRUN->save();

        //ocupo una view
        return redirect('/cruns')->with('success','Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CRUN $CRUN)
    {
        //ocupo una view
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CRUN $CRUN)
    {
        return view con array
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CRUN $CRUN)
    {
        $this->validate($request,[
          'name' => 'required',
          'sede' => 'required',
          'corte'=> 'required'
        ]);

        $CRUN = new CRUN();
        $CRUN->name = $request->name;
        $CRUN->sede = $request->sede;
        $CRUN->corte= $request->corte;

        $CRUN->save();
        //ocupo una view
        return redirect('/cruns')->with('success','Creado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CRUN $CRUN)
    {
        $CRUN->delete();
        return redirect('/cruns')->with('success','Creado');
    }
}
