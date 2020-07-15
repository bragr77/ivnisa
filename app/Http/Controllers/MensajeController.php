<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cont = 1;
        $mensajes = Mensaje::all();

        return view('backend.mensajes.index', [
            'mensajes' => $mensajes,
            'cont' => $cont
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
        return $this->saveMensaje($request, null);
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
        $mensaje = Mensaje::find($id);

        $mensaje->delete();

        return redirect()->route('mensaje.index');
    }

    public function saveMensaje(Request $request, $id){

        if ($id) {
            $mensaje = Mensaje::find($id);
        }else{
            $mensaje = new Mensaje();
        }

        $mensaje->nombre = $request->input('nombre');
        $mensaje->apellido = $request->input('apellido');
        $mensaje->email = $request->input('email');
        $mensaje->asunto = $request->input('asunto');
        $mensaje->mensaje = $request->input('mensaje');

        $mensaje->save();

        return redirect()->route('index');

    }
}
