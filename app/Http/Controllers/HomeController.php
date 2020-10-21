<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        return view('home'); 
    }


    public function Logout()
    {
        // $logout= Auth::logout();
            Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->route('login')->with($notification);
       

    }
    public function single($cat, $slug){
      $single = DB::table('posts')->where('slug', $slug)->first();
      return view('pages.single', compact('single'));

    }
    public function showfrontend($slug, $id){
        $cat = DB::table('posts')
        ->join('categories', 'posts.category_id', 'categories.id')
        ->where('category_id', $id)->where('status', 1)->get();
        $cat_name = DB::table('categories')->where('id', $id)->first();

        return view('pages.cat', compact('cat', 'cat_name'));

    }

    public function search(Request $request){
        $item = $request->search;
        $posts = DB::table('posts')->join('categories', 'posts.category_id', 'categories.id')->where('tags', 'LIKE', "%$item%")->where('status', 1)->get();
        return view('pages.search', compact('posts')); 

    }
  
}
