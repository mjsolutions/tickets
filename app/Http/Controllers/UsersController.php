<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users = User::orderBy('id','ASC')->paginate(2);
    	return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$user = new User($request->all());
    	$user->password = bcrypt($request ->password);
    	$user -> save();
    	flash('Se ha registrado '. $user->name . ' de forma exitosa.','success');
    	return redirect()->route('users.index');
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
    	$user = User::find($id);
    	return view('admin.users.edit')->with('user', $user);
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
    	$user = User::find($id);
    	$user->fill($request->all());
    	$user->save();
    	flash('El usuario '. $user->name . ' ha sido editado de forma exitosa.','warning');
    	return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$user = User::find($id);
    	$user->delete();

    	flash('El usuario '.$user->name.' a sido eliminado de forma exitosa.','danger');
    	return redirect()->route('users.index');
    }
}
