<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\incidente;
use App\Rfc;
class IncidentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidentes = incidente::where('status','LIKE','incidente')->get();
        return view('home')->with(compact('incidentes'));
    }

    public function problemas(){
         $incidentes = incidente::where('status','LIKE','problema')->get();
        return view('problemas')->with(compact('incidentes'));
    }

    public function rfc(Request $request)
    {
        $datos = Rfc::find($request->folio);
        return view('rfc')->with(compact('datos'));
    }
    public function guardar_rfc(Request $request)
    {
        Rfc::find($request->numero_rfc)->update($request->all());
        return redirect()->route('home');
    }

    public function generar_pdf(Request $request)
    {
        $datos = Rfc::find($request->id);
        //return view('reportes.pdf')->with(compact('datos'));

        $pdf = \PDF::loadView('reportes.pdf',compact('datos'));
        return $pdf->download('reporte.pdf');

        
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
