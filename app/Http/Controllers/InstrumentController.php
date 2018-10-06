<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\instrument;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $instruments = instrument::all();
        return view('instrument.show',compact('instruments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instrument.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'type'=>'required',
            'model'=>'required',
            'serial'=>'required',
            'brand'=>'required',
            'client'=>'required',
        ]);

        $instrument = new instrument;
        $instrument->type = $request->type;
        $instrument->model = $request->model;
        $instrument->serial = $request->serial;
        $instrument->brand = $request->brand;
        $instrument->client = $request->client;

        $instrument->save();
        return redirect(route('instruments.index'));
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
        $instrument = instrument::find($id);
        return view('instrument.edit',compact('instrument'));
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
        $this->validate($request,
        [
            'type'=>'required',
            'model'=>'required',
            'serial'=>'required',
            'brand'=>'required',
            'client'=>'required',
        ]);

        $instrument = instrument::find($id);
        $instrument->type = $request->type;
        $instrument->model = $request->model;
        $instrument->serial = $request->serial;
        $instrument->brand = $request->brand;
        $instrument->client = $request->client;
        $instrument->constant = $request->constant;
        $instrument->calibrated = $request->calibrated;
        $instrument->due = $request->due;
        $instrument->receipt = $request->receipt;

        $instrument->save();
        return redirect(route('instruments.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        instrument::where('id',$id)->delete();
        return redirect()->back();
    }
}
