<?php

namespace App\Http\Controllers\Admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function category(){
        $category = Category::all();
        return view('admin.category.category', compact('category'));
    }
    public function storeCategory(Request $request){
        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);
        $data = array();
        $data['category_name'] = $request->category_name;
        DB::table('categories')->insert($data);
        $notification=array(
            'messege'=>'Category successfully added',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function deleteCategory($id){
        DB::table('categories')->where('id', $id)->delete();
        $notification=array(
            'messege'=>'Category successfully deleted',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);  
    }

    public function editCategory($id){
        $category = DB::table('categories')->where('id', $id)->first();
        return view('Admin/Category/edit_category', compact('category'));
    }

    public function updateCategory(Request $request, $id){
        $validateData = $request->validate([
            'category_name' => 'required|max:255',
        ]);
        $data = array();
        $data['category_name'] = $request->category_name;
        $update = DB::table('categories')->where('id', $id)->update($data);
        if ($update) {
            $notification=array(
                'messege'=>'Category successfully updated',
                'alert-type'=>'success'
                 );
               return Redirect()->route('categories')->with($notification); 
        }else {
            $notification=array(
                'messege'=>'Nothing to update',
                'alert-type'=>'error'
                 );
               return Redirect()->route('categories')->with($notification); 
        }

    }
   
}
