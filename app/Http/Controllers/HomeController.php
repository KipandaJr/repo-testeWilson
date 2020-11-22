<?php

namespace App\Http\Controllers;

use App\Tabela_a;
use App\Tabela_beneficiarios;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Tabela_beneficiarios::all();
        return view('index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actualiza()
    {
        $valor = Tabela_a::all()->first();
        $fixed = $valor->valor;
        foreach (Tabela_beneficiarios::all() as $benefit) {
            if ($benefit->name == 'José') {
                $fixed = ($fixed * 13 / 100);
                $benefit->bonus = $benefit->bonus + $fixed;
            } else if ($benefit->name == 'João') {
                $fixed = ($fixed * 3 / 100);
                $benefit->bonus = $benefit->bonus + $fixed;
            } else if ($benefit->name == 'António') {
                $benefit->bonus = $benefit->bonus + $fixed;
            }
            $benefit->save();
        }
        return redirect()->route('index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
