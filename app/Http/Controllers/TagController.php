<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('tag.index',compact('tags'));
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        $tag = new Tag;
        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name);
        session()->flash('message', 'Tag Created successful !!');
        $tag->save();
        return redirect()->route('tag.index');

    }
    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.show',compact('tag'));
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.edit',compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        $tag = Tag::findOrFail($id);
        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name);
        session()->flash('message', 'Tag Updated successful !!');
        $tag->save();
        return redirect()->route('tag.index');
    }


    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        session()->flash('message', 'Tag deleted successful !!');
        return redirect()->route('tag.index');

    }
}
