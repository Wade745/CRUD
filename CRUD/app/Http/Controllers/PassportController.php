<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passport;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passports=\App\Passport::all();
        return view('index',compact('passports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $passport= new \App\Passport;
        $passport->name=$request->get('name');
        $passport->email=$request->get('email');
        $passport->number=$request->get('number');
        $passport->date=$request->get('date');
        $passport->save();
        
        return redirect('passports')->with('success', 'Information has been added');
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
        $passport = \App\Passport::find($id);
        return view('edit',compact('passport','id'));
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
        $passport= \App\Passport::find($id);
        $passport->name=$request->get('name');
        $passport->email=$request->get('email');
        $passport->number=$request->get('number');
        $passport->date=$request->get('date');
        $passport->save();
        return redirect('passports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passport = \App\Passport::find($id);
        $passport->delete();
        return redirect('passports')->with('success','Information has been  deleted');
    }
}
