<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $empleados = array(
          array("id" => "000001", "nombre" => "Marcos Enrique", "apellidos" => "Ramos Hernandez", "generales" => "SONSONATE7964-9999 || 7964-9999", "cargo"=> "Gerente Creditos","email" => "jorge.castaneda@solucredis.com"),
          array("id" => "000001", "nombre" => "Marcos Enrique", "apellidos" => "Ramos Hernandez", "generales" => "SONSONATE7964-9999 || 7964-9999", "cargo"=> "Gerente Creditos","email" => "jorge.castaneda@solucredis.com"),
          array("id" => "000001", "nombre" => "Marcos Enrique", "apellidos" => "Ramos Hernandez", "generales" => "SONSONATE7964-9999 || 7964-9999", "cargo"=> "Gerente Creditos","email" => "jorge.castaneda@solucredis.com"),
          array("id" => "000001", "nombre" => "Marcos Enrique", "apellidos" => "Ramos Hernandez", "generales" => "SONSONATE7964-9999 || 7964-9999", "cargo"=> "Gerente Creditos","email" => "jorge.castaneda@solucredis.com"),
          array("id" => "000001", "nombre" => "Marcos Enrique", "apellidos" => "Ramos Hernandez", "generales" => "SONSONATE7964-9999 || 7964-9999", "cargo"=> "Gerente Creditos","email" => "jorge.castaneda@solucredis.com"),
          array("id" => "000001", "nombre" => "Marcos Enrique", "apellidos" => "Ramos Hernandez", "generales" => "SONSONATE7964-9999 || 7964-9999", "cargo"=> "Gerente Creditos","email" => "jorge.castaneda@solucredis.com"),
          array("id" => "000001", "nombre" => "Marcos Enrique", "apellidos" => "Ramos Hernandez", "generales" => "SONSONATE7964-9999 || 7964-9999", "cargo"=> "Gerente Creditos","email" => "jorge.castaneda@solucredis.com"),
          array("id" => "000001", "nombre" => "Marcos Enrique", "apellidos" => "Ramos Hernandez", "generales" => "SONSONATE7964-9999 || 7964-9999", "cargo"=> "Gerente Creditos","email" => "jorge.castaneda@solucredis.com")
        );
        return view('pages/empleado/list-empleado', ['empleados' => $empleados]);
    }

    public function newEmployee(){
        return view('pages/empleado/nuevo-empleado');
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
