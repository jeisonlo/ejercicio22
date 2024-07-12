<?php

namespace App\Http\Controllers;
use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function create(){
        return view('cliente.create');
    }
    
    public function store(Request $request){
        $cli = new cliente();
    
        $cli->telefono = $request->telefono;
        $cli->domicilio = $request->domicilio;
        $cli->numsocial = $request->numsocial;
    
        $cli->save();
    
        return redirect()->route('cliente.show', $cli->id);
    }
    
    public function index(){
        $cli = cliente::orderBy('id', 'desc')->get();
        return view('cliente.listar', compact('cli'));
    }
    
    public function destroy(cliente $cliente){
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
    
    public function edit(cliente $cliente){
        return view('cliente.edit', compact('cliente'));
    }
    
    public function update(Request $request, cliente $cliente){
        $cliente->telefono = $request->telefono;
        $cliente->domicilio = $request->domicilio;
        $cliente->numsocial = $request->numsocial;
        $cliente->save();
    
        return redirect()->route('cliente.index');
    }
    
    public function show($id){
        $cli = cliente::findOrFail($id);
        return view('cliente.show', compact('cli'));
    }
}
 