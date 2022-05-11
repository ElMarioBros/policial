<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agentes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $agente = Agentes::all();

        return view('home',['agentes'=>$agente]);
    }

    public function map()
    {
        return view('map');
    }

    public function credential($id)
    {
        $agente = Agentes::find($id);
        return view('credential',['agente'=>$agente]);
    }

    public function print($id)
    {
        $agente = Agentes::find($id);
        return view('print',['agente'=>$agente]);
    }

    public function store(Request $request)
    {

        $agente = new Agentes;
        $agente->nomina = $request->nomina;
        $agente->nombre = $request->nombre;
        $agente->asignacion = $request->asignacion;
        $agente->ingreso = $request->ingreso;
        $agente->nds = $request->nds;
        $agente->curp = $request->curp;
        $agente->telefonos = $request->telefonos;
        $agente->beneficiarios = $request->beneficiarios;

        $agente->save();

        return redirect()->route('store')->with('success','Agente registrado exitosamente. ');
    }
}
