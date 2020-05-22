<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\incidente;
use App\Rfc;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.index');
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
    public function caca(Request $request){
        $mensaje = $request->primero;
        $email = $request->email;
        $tiempo = rand(10,55);
        $folio = rand(1000,3000);
        if($request->otro){
            $mensaje = $request->otro;
        }

            if(incidente::where('email',$email)->exists() && incidente::where('descripcion',$mensaje)->exists() ){
               $status = "problema";
            }else{
                $status = "incidente";
            }

        $incidente = new incidente([
            'descripcion' => $mensaje,
            'email' => $email,
            'status' => $status
        ]);
        
        $incidente->save();

        $rfc = new Rfc([
            'numero_rfc' => $folio
        ]);
        $rfc->save();

        Mail::send('email.folio',compact('mensaje','tiempo','folio'),function($msj) use($email){
            $msj->subject('Reporte de chikavi');
            $msj->to($email);
        });

         return redirect()->route('reporte')->with('success','Se te envio un correo,ya estamos trabajando en ello.');
    }


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
