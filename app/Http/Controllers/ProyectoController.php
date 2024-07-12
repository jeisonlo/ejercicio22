<?php

namespace App\Http\Controllers;
use App\Models\proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{


    public function create(){
        return view('proyecto.create');
    }
    
    public function store(Request $request){
        $pro = new Proyecto();
    
        $pro->descripcion = $request->descripcion;
        $pro->fechainicio = $request->fechainicio;
        $pro->fechafin = $request->fechafin;
        $pro->cuantia = $request->cuantia;
    
        $pro->save();
    
        return redirect()->route('proyecto.show', $pro->id);
    }
    
    public function index(){
        $pro = Proyecto::orderBy('id', 'desc')->get();
        return view('proyecto.listar', compact('pro'));
    }
    
    public function destroy(Proyecto $proyecto){
        $proyecto->delete();
        return redirect()->route('proyecto.index');
    }
    
    public function edit(Proyecto $proyecto){
        return view('proyecto.edit', compact('proyecto'));
    }
    
    public function update(Request $request, Proyecto $proyecto){
        $proyecto->descripcion = $request->descripcion;
        $proyecto->fechainicio = $request->fechainicio;
        $proyecto->fechafin = $request->fechafin;
        $proyecto->cuantia = $request->cuantia;
        $proyecto->save();
    
        return redirect()->route('proyecto.index');
    }
    
    public function show($id){
        $pro = Proyecto::findOrFail($id);
        return view('proyecto.show', compact('pro'));
    }







    //
}
