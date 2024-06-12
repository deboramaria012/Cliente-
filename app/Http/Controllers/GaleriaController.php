<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GaleriaController extends Controller

{
    // Exibir lista de itens da galeria
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    // Mostrar formulário para criar um novo item da galeria
    public function create()
    {
        return view('gallery.create');
    }

    // Salvar novo item da galeria
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $galeria = new Gallery();
        $galeria->title = $request->title;
        $galeria->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $image->move($destinationPath, $name);
            $galeria->image = $name;
        }

        $galeria->save();

        return redirect()->route('gallery.index')->with('success', 'Item adicionado à galeria com sucesso.');
    }

    // Mostrar formulário para editar um item da galeria
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit', compact('gallery'));
    }

    // Atualizar item da galeria
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $galeria = Gallery::find($id);
        $galeria->title = $request->title;
        $galeria->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $image->move($destinationPath, $name);
            $galeria->image = $name;
        }

        $galeria->save();

        return redirect()->route('gallery.index')->with('success', 'Item atualizado com sucesso.');
    }

    // Deletar item da galeria
    public function destroy($id)
    {
        $galeria = Gallery::find($id);
        $galeria->delete();
        return redirect()->route('gallery.index')->with('success', 'Item deletado com sucesso.');
    }
}


