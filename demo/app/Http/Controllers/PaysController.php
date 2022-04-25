<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pays;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = Pays::All();
        return $pays;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pays::create([
            'nom'=>$request->nom,
            'continent'=>$request->continent,
            'monnaie'=>$request->monnaie,
            'superficie'=>$request->superficie,
            'description'=>$request->description
        ]);
        return response()->json('Created successfully');
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
        $pays = Pays::find($id);
        return $pays;
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
        $pays = Pays::find($id);
        $pays->update([
            'nom'=>$request->nom,
            'continent'=>$request->continent,
            'monnaie'=>$request->monnaie,
            'superficie'=>$request->superficie,
            'description'=>$request->description
        ]);
        return $pays;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pays::find($id)->delete();
       return response()->json('deleted successfully');
    }
}
