<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Consultamos la tabla
        //$contactos = DB::table('contactos')->get();
        $contactos = DB::table('contactos')->paginate(3);
        //Enviamos los contactos en la variable $contactos
        return view('contactos.index',['contactos'=>$contactos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //cargamos el formulario ubicado en la view
        return view('contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Para obtener una instancia del HTTP request se hace via dependency infection
        $id = $request->input('idcontacto');
        $nom = $request->input('nombres');
        $ape = $request->input('apellidos');
        $ema = $request->input('email');
        //primera forma
        //DB::insert("insert into contactos values ('?,?,?,?),[$id,$nom,$ape,$ema]");
        //segunda format
        DB::table('contactos')->insert([
          'idcontacto'=>$id,
          'nombres'=>$nom,
          'apellidos'=>$ape,
          'email'=>$ema
        ]);
        //Redireccionamos al ldap_first_attribute
        return redirect('contacto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Recuperamos la informacion de un determinado contacto
        $contacto = DB::table('contactos')->where('idcontacto',$id)->first();
        //Mandamos los datos a la view.Show
        return view('contactos.show',['contacto'=>$contacto]);
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
        $contacto = DB::table('contactos')->where('idcontacto',$id)->first();
        //Mandamos los datos a la view.show
        return view('contactos.edit',['contacto'=>$contacto]);
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
        $ape = $request->input('apellidos');
        $ema = $request->input('email');
        //primera forma
        DB::table('contactos')
          ->where('idcontacto',$id)
          ->update([
            'nombres'=>$nom,
            'apellidos'=>$ape,
            'email' => $ema
          ]);
        //Redireccionamos al listar
        return redirect('contacto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('contactos')->where('idcontacto',$id)->delete();
        //Redireccionamos al listar
        return redirect('contacto');
    }
}
