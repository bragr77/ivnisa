<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use App\Mail\RespuestaAutomatica;
use Illuminate\Http\Request;
use App\Mensaje;
use Illuminate\Support\Facades\Mail;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contn = 1;
        $contr = 1;

        $mensajes = Mensaje::all();

        return view('backend.mensajes.index', [
            'mensajes' => $mensajes,
            'contn' => $contn,
            'contr' => $contr,
        ]);
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

        //Enviar por email

       /*  $datosemail = [
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'asunto' => $request->input('asunto'),
            'mensaje' => $request->input('mensaje'),
        ];

        Mail::to('bragr77@gmail.com')->send(new MensajeRecibido($datosemail));

        Mail::to($request->input('email'))->send(new RespuestaAutomatica($datosemail)); */

        //salvar en base de datos

        $mensaje = new Mensaje();

        $mensaje->nombre = $request->input('nombre');
        $mensaje->apellido = $request->input('apellido');
        $mensaje->telefono = $request->input('telefono');
        $mensaje->email = $request->input('email');
        $mensaje->asunto = $request->input('asunto');
        $mensaje->mensaje = $request->input('mensaje');
        $mensaje->visto = 0;

        $mensaje->save();

       return redirect()->route('msjenviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = Mensaje::find($id);

        $mensaje->visto = 1;

        $mensaje->save();

        return view('backend.mensajes.show', ['mensaje' => $mensaje]);
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
        $mensaje = Mensaje::find($id);

        $mensaje->delete();

        return redirect()->route('mensaje.index');
    }
}
