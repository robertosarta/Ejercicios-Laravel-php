<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create() {
        $tags = Tag::all();
        return view('tags.create', compact(('tags')));
    }

    public function store(TagRequest $request) {
        $tag = Tag::create([
            'nombre' => $request->nombre
        ]);

        return redirect()->route('tags.index')->with('success','Tag creado con éxito');
    }

    public function destroy(Tag $tag) {
        $tag->delete();
        return redirect()->route('tags.index')->with('success','Tag eliminado con éxito');
    }
}