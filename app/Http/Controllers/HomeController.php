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

    public function printBack($id)
    {
        $agente = Agentes::find($id);
        return view('print-back',['agente'=>$agente]);
    }

    public function store(Request $request)
    {

        $agente = new Agentes;
        
        $agente->nomina = $request->nomina ? $request->nomina : ' ';        
        $agente->cuip = $request->cuip ? $request->cuip : ' ';
        $agente->cargo =$request->cargo ? $request->cargo : ' ';
        $agente->nombre = $request->nombre;
        $agente->asignacion = $request->asignacion ? $request->asignacion : ' ';
        $agente->ingreso = $request->ingreso ? $request->ingreso : ' ';
        $agente->nds = $request->nds ? $request->nds : ' ';
        $agente->curp = $request->curp ? $request->curp : ' ';
        $agente->telefonos = $request->telefonos ? $request->telefonos : ' ';
        $agente->beneficiarios = $request->beneficiarios ? $request->beneficiarios : ' ';

        $agente->save();

        return redirect()->route('store')->with('success','Agente registrado exitosamente. ');
    }

    public function upload($id)
    {
        $agente = Agentes::find($id);
        return view('upload',['agente'=>$agente]);
    }

    public function saveImage(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'file'=>'required|image'
        ]);
        $agente = Agentes::find($request->id);
        $image = $request->file('file');
        $destinationPath = 'img/';
        $filename = $request->id.'-'.time().'.'.$image->extension();
        $uploadSuccess = $request->file('file')->move($destinationPath,$filename);

        $agente->imagen = $destinationPath . $filename;
        
        $agente->save();
        return redirect()->route("credential","$request->id")->with('success','Imagen ingresada exitosamente. ');
    }

    public function editView($id)
    {
        $agente = Agentes::find($id);
        return view('edit',['agente'=>$agente]);
    }

    public function editAgent(Request $request, $id)
    {

        $agente = Agentes::find($id);
        $agente->nomina = $request->nomina;
        $agente->cuip = $request->cuip;
        $agente->cargo =$request->cargo;
        $agente->nombre = $request->nombre;
        $agente->asignacion = $request->asignacion;
        $agente->ingreso = $request->ingreso;
        $agente->nds = $request->nds;
        $agente->curp = $request->curp;
        $agente->telefonos = $request->telefonos;
        $agente->beneficiarios = $request->beneficiarios;

        $agente->save();

        return redirect()->route('home')->with('success','Agente registrado exitosamente. ');
    }

    public function deleteView($id)
    {
        $agente = Agentes::find($id);
        return view('delete',['agente'=>$agente]);
    }

    public function deleteAgent($id)
    {
        $agente = Agentes::find($id);
        $agente->delete();
        return view('delete-success',['agente'=>$agente]);
    }


}
