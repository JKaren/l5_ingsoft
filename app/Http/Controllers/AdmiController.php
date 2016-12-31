<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AdmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //Consultamos la tabla
      $administrativos = DB::table('administrativos')->get();
      $telefonos = DB::table('telefonos')->get();
      //$administrativos = DB::table('administrativos')->paginate(3);
      //Enviamos los contactos en la variable $contactos
      return view('administrativos.index',['administrativos'=>$administrativos,'telefonos'=>$telefonos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrativos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        $nom = $request->input('nombres');
        $car = $request->input('cargo');
        $ema = $request->input('email');
        $tel = $request->input('telefono');
        $dni = $request->input('dni');

        DB::table('administrativos')->insert([
          'id'=>$id,
          'nombres'=>$nom,
          'cargo' => $car,
          'email' => $ema,
          'telefono'=>$tel,
          'dni'=>$dni
        ]);
        //Redireccionar
        return redirect('administrativo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrativo = DB::table('administrativos')->where('id',$id)->first();
        return view('administrativos.show',['administrativo'=>$administrativo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //Recuperamos la informacion de un determinado contacto
      $administrativo = DB::table('administrativos')->where('id',$id)->first();
      //Mandamos los datos a la view.show
      return view('administrativo.edit',['administrativo'=>$administrativo]);
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
      $nom = $request->input('nombres');
      $car = $request->input('cargo');
      $ema = $request->input('email');
      $tele = $request->input('telefono');
      $dni = $request->input('dni');
      DB::table('administrativos')
          ->where('idcontacto',$id)
          ->update([
          'nombres' => $nom,
          'cargo' => $car,
          'email' => $ema,
          'telefono' => $tele,
          'dni' => $dni
      ]);
      return redirect('administrativo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('administrativos')->where('id',$id)->delete();
      //Redireccionamos al listar
      return redirect('administrativo');
    }
}
