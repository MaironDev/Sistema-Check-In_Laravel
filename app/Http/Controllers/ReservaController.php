<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $codigo
     * @return \Illuminate\Http\Response $Object persona y vuelo
     */
    public function show(Request $request)
    {   
        $codigo = $request->post('codigo');
        $fecha = Date("d/m/Y", strtotime($request->post('fecha')));
        $hora = $request->post('hora');
       

        try {
            $validar = DB::table('reservas')->where('codigo','=',$codigo)->get()[0];
            if($validar != null){
                if($validar->fecha==$fecha && $validar->hora==$hora){
                    $persona = DB::table('personas')->where('codigo','=',$codigo)->get()[0];
                    $vuelo = DB::table('vuelos')->where('cedula',$persona->cedula)->get()[0];
                    return view('pasajeros',['persona'=>$persona,'vuelo'=>$vuelo]);
                }else{
                    return view('checkin',['error'=>"La fecha y hora no coinciden con el codigo"]);
                }
            }else{
                return view('checkin',['error'=>"Los datos no coinciden con nuestros registros"]);
            }
            
        } catch (\Throwable $th) {
            return view('checkin',['error'=>$th->getMessage()]);
        }
        
        
        
    }
}
