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
        $request->validate([
            "name"=>"required|min:3"
        ]);

        $agente = new Agentes;
        $agente->name = $request->name;
        $agente->save();

        return redirect()->route('form')->with('success','Tarea insertada exitosamente');
    }
}
