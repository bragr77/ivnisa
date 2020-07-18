<?php

namespace App\Http\Controllers;

use App\Formulario;
use App\Mail\RespuestaAutomaticaSolicitud;
use App\Mail\SolcitudRecibida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cont = 1;
        $formularios = Formulario::orderBy('created_at', 'desc')->paginate(8);

        return view('backend.formularios.index', [
            'formularios' => $formularios,
            'cont' => $cont,
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

        $datosemail = [
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'telefono' => $request->input('celular'),
            'email' => $request->input('email'),
        ];


        Mail::to('bragr77@gmail.com')->send(new SolcitudRecibida($datosemail));

        Mail::to($request->input('email'))->send(new RespuestaAutomaticaSolicitud($datosemail));

        //salvar en base de datos

        $formulario = new Formulario();

        $formulario->cantidad = $request->input('cantidad');
        $formulario->cuotas = $request->input('cuotas');

        $formulario->nombre = $request->input('nombre');
        $formulario->apellido = $request->input('apellido');
        $formulario->cedula = $request->input('cedula');
        $formulario->edocivil = $request->input('edocivil');
        $formulario->celular = $request->input('celular');
        $formulario->telefono = $request->input('telefono');
        $formulario->email = $request->input('email');
        $formulario->nrohijos = $request->input('nrohijos');
        $formulario->direccion = $request->input('direccion');
        $formulario->ptorefe = $request->input('ptorefe');
        $formulario->tiemporesidencia = $request->input('tiemporesidencia');
        $formulario->tipovivienda = $request->input('tipovivienda');

        $formulario->slaboral = $request->input('slaboral');
        $formulario->empresa = $request->input('empresa');
        $formulario->tlaborando = $request->input('tlaborando');
        $formulario->cargo = $request->input('cargo');
        $formulario->sueldo = $request->input('sueldo');
        $formulario->jinmediato = $request->input('jinmediato');
        $formulario->telefonojefe = $request->input('telefonojefe');
        $formulario->otrosingresos = $request->input('otrosingresos');

        $formulario->nref1 = $request->input('nref1');
        $formulario->teleref1 = $request->input('teleref1');
        $formulario->pref1 = $request->input('pref1');
        $formulario->dirref1 = $request->input('dirref1');
        $formulario->nref2 = $request->input('nref2');
        $formulario->teleref2 = $request->input('teleref2');
        $formulario->pref2 = $request->input('pref2');
        $formulario->dirref2 = $request->input('dirref2');

        $formulario->banconomina = $request->input('banconomina');
        $formulario->nrocuenta = $request->input('nrocuenta');
        $formulario->titular = $request->input('titular');
        $formulario->bancocuenta = $request->input('bancocuenta');
        $formulario->referido = $request->input('referido');

        $formulario->visto = 0;

        $formulario->save();

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
        $formulario = Formulario::find($id);

        $formulario->visto = 1;

        $formulario->save();

        return view('backend.formularios.show', ['formulario' => $formulario]);
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
        $formulario = Formulario::find($id);

        $formulario->delete();

        return redirect()->route('formulario.index');
    }
}
