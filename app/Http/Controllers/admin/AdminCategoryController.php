<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;

class AdminCategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("admin.pages.category.index", compact('categories'));
    }
    public function create(){
        return view("admin.pages.category.create");
    }
    public function store(CreateCategoryRequest  $request){

       $data = $request->validated();
       
       // image logic

       $img = $data['image'];

       $ext = $img->getClientOriginalExtension();

       $img_name = 'category-'.rand(100000,10000000).".".$ext;

       $img->move(public_path('admin/assets/img/categories'),$img_name);

       $data['image'] = $img_name;

       Category::create($data);

        // return to_route('admin.category')->with('success', 'Category created successfully');
    }
    public function delete(category $category){
        $category->delete();
        return to_route('admin.category')->with('success', 'category deleted successfully.');
   }
   public function update($id,Request $request){
       $category = Category::findorfail($id);
       $category->title = $request->title;
       $category->save();
       return redirect()->route('admin.category')->with('success', 'Category Updated successfully.');
   }
   public function edit($id){
       $category = Category::findorfail($id);
       return view('admin.pages.category.edit',['category' => $category]);
   }
}

