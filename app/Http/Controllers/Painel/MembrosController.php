<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Membro;
use File;

class MembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Membro $membro)
    {

        $title = 'Listagem dos Membros';
        $css = 'membros';
        $membros = $membro->all();

        return view('painel/membros/index', compact('membros', 'css'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel/membros/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $destino = 'upload/membros';
        $extension = $file->extension();

        $fileName = rand(11111, 99999).time().'.'. $extension;
        $file->move($destino, $fileName);

        $dados = $request->all();
        $dados['imagem'] = $fileName;

        $insert = Membro::create($dados);

        if($insert){
            return redirect()->route('membros.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membro = Membro::find($id);

        return view ('painel/membros/show', compact('membro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membro = Membro::find($id);

        return view('painel/membros/create', compact('membro'));
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
        $foto = $request->file('foto');
        $dados = $request->all();
        $membro = Membro::find($id);
        if(isset($foto)){

            File::delete(public_path('upload/membros/'.$membro->imagem));
            $destino = 'upload/membros';
            $extension = $foto->extension();

            $fileName = rand(11111, 99999).time().'.'. $extension;
            $foto->move($destino, $fileName);
            $dados['imagem'] = $fileName;
            $membro->update($dados);
        } else {
            $membro->update($dados);
        }
        return redirect()->route('membros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membro = Membro::find($id);
        File::delete(public_path('upload/membros/'.$membro->imagem));
        Membro::destroy($id);
        return redirect()->route('membros.index');
    }
}
