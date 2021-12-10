<?php

namespace App\Http\Controllers;

use App\Models\Textodiario;
use Illuminate\Http\Request;

class TextodiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nome = array("nome" => "DN");
        return view ("inicial", $nome);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Textodiario  $textodiario
     * @return \Illuminate\Http\Response
     */
    public function show(Textodiario $textodiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Textodiario  $textodiario
     * @return \Illuminate\Http\Response
     */
    public function edit(Textodiario $textodiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Textodiario  $textodiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Textodiario $textodiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Textodiario  $textodiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Textodiario $textodiario)
    {
        //
    }
}
