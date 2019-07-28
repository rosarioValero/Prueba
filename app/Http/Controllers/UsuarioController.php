<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\UserData;
use App\Ofertas;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtenemos las ofertas creadas por el propio usuario
        $usuarioEmail = auth()->user()->email;
        $oferta = UserData::where('usuario', $usuarioEmail)->paginate(5);
        return view('ofertas.lista',compact('oferta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // En esta parte tendremos la vista creada para añadir ofertas manualmente
        return view('ofertas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * Funcion que almacenara las ofertas creadas
     */
    public function store(Request $request)
    {
        // Agregar las ofertas.

        $oferta = new UserData();
        $oferta->nombre = $request->nombre;
        $oferta->descripcion = $request->descripcion;
        $oferta->usuario = auth()->user()->email;
        $oferta->save();
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

    // Funcion que genera un codigo aleatorio para canjear
    public static function generarCodigo($longitud){
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud; $i++) $key .= $pattern{
            mt_rand(0,$max)
        };
        return $key;
    }

    public static function agregarOferta(Request $request){

        $misOfertas = new Ofertas();
        $misOfertas->nombre = $request->nombre;
        $misOfertas->descripcion = $request->descripcion;
        
        if ($misOfertas == ' ') {
            $misOfertas = DB::table('user_datas')->where('usuario','=',$usuarioEmail)->get();
            $misOfertas = DB::table('ofertas')->insert(['id','nombre','descripcion'=>$misOfertas]);

        }else {

        }
        return $misOfertas;
    }


    public function eliminar($id){

        $oferta = UserData::findOrFail($id);
        $oferta->delete();

        Session::flash('error', 'OfertaEliminada');

        return redirect()->route('/usuarioOferta');
    }
}