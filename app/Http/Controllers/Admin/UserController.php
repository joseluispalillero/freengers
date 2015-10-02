<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	if (\Auth::user()->tipo == "1"){ //admin
        	$users = User::paginate();
    	}else{
    		$users = User::vendedor(\Auth::user()->id)->paginate();
    	}
        
        return view('pages/home', compact('users'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('pages/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$usuario= new User($request->all());
    	$usuario->vendedor = \Auth::user()->id;
    	$usuario->save();
    	
    	return \Redirect::route('admin.user.index');
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
    	$user = User::findOrFail($id);
    	return view('pages/edit', compact('user'));
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
    	$usuario = User::findOrFail($id);
    	$usuario->fill($request->all());
    	$usuario->vendedor = \Auth::user()->id;
    	$usuario->save();
    	 
    	return \Redirect::route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	User::destroy($id);
    	Session::flash("mensaje", "Usuario eliminado correctamente!!");
    	
    	return \Redirect::route('admin.user.index');
    }
}
