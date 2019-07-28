<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ofertas;
use App\UserData;


class MisOfertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     //utiliza la autentificacion del usuario logueado
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        //
        $usuarioEmail = auth()->user()->email;
        $misOfertas = Ofertas::where('usuario', $usuarioEmail)->paginate(5);
        return view('misOfertas.listaOfertas',compact('misOfertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('misOfertas.listaOfertas');
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
        $misOfertas = new Ofertas();
        $misOfertas->nombre = $request->nombre;
        $misOfertas->descripcion = $request->descripcion;
        $misOfertas->usuario = auth()->user()->email;
        $misOfertas->save();
    return back()->with('error', 'Oferta Agregada!');
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
