<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Clientes;

class ClienteController extends Controller
{
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	if (\Auth::user()->tipo == "1"){ //admin
        	$clientes = Clientes::paginate();
    	}else{
    		$clientes = Clientes::vendedor(\Auth::user()->id)->paginate();
    	}
        
        return view('cliente/home', compact('clientes'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('cliente/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$usuario= new Clientes($request->all());
    	$usuario->vendedor = \Auth::user()->id;
    	$usuario->save();
    	
    	return \Redirect::route('admin.cliente.index');
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
    	$cliente = Clientes::findOrFail($id);
    	return view('cliente/edit', compact('cliente'));
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
    	$usuario = Clientes::findOrFail($id);
    	$usuario->fill($request->all());
    	$usuario->vendedor = \Auth::user()->id;
    	$usuario->save();
    	 
    	return \Redirect::route('admin.cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	Clientes::destroy($id);
    	Session::flash("mensaje", "Cliente eliminado correctamente!!");
    	
    	return \Redirect::route('admin.cliente.index');
    }
}
