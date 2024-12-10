<?php

namespace App\Http\Controllers\admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('admin.pages.tags.index',compact('tags'));
    }
    public function create(){
        return view('admin.pages.tags.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        Tag::create($request->all());
        return redirect()->route('admin.tag')->with('success', 'Tag created successfully.');
    }
    public function delete(tag $tag){
         $tag->delete();
         return to_route('admin.tag')->with('success', 'Tag deleted successfully.');
    }
    public function update($id,Request $request){
        $tag = Tag::findorfail($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $tag->update($request->all());
        return redirect()->route('admin.tag')->with('success', 'Tag Updated successfully.');
    }
    public function edit($id){
        $tag = Tag::findorfail($id);
        return view('admin.pages.tags.edit',['tag' => $tag]);
    }
}
