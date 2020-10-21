<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;

use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $all_posts = DB::table('posts')
                          ->join('categories', 'posts.category_id', 'categories.id')
                          ->select('posts.*', 'categories.category_name')
                          ->get();
        // return response()->json($all_posts);
        return view('admin.post.index', compact('all_posts'));                  
    }

    public function createpost(){
        $category = DB::table('categories')->get();
        return view('admin.post.create', compact('category'));
    }

    public function storepost(Request $request){
        $data = array();
        $data['title'] = $request->title;
        $data['slug'] = Str::slug($request->title, '-');
        $data['fullname'] = $request->fullname;
        $data['birth_date'] = $request->birth_date;
        $data['death_date'] = $request->death_date;
        $data['birth_date_maually'] = $request->birth_manually;
        $data['death_date_maually'] = $request->death_manually;
        $data['birth_place'] = $request->birth_place;
        $data['death_place'] = $request->death_place;
        $data['category_id'] = $request->category_id;
        $data['full_text'] = $request->full_text;
        $data['description'] = Str::limit(strip_tags($request->full_text), 140);
        $data['tags'] = $request->tags;
        $data['top_slider'] = $request->top_slider;
        $data['low_slider'] = $request->low_slider;
        $data['status'] = 1;
        $data['created_at']  =  \Carbon\Carbon::now();
        $data['updated_at'] = \Carbon\Carbon::now();
        $image = $request->image;

        // return response()->json($data);

        if ($image) {
            $image_name = hexdec(uniqid()). "." .$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('public/media/posts/'.$image_name);
            $data['image'] = 'public/media/posts/'. $image_name;
            $posts = DB::table('posts')->insert($data);
            $notification=array(
                'messege'=>'Post successfully added',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification); 
        }
    }
    public function activate(Request $request, $id){
        
        DB::table('posts')->where('id', $id)->update(['status' => 1]);
        $notification=array(
            'messege'=>'Post successfully activated',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification); 

    }
    public function deactivate( $id){
        
        DB::table('posts')->where('id', $id)->update(['status' => 2]);
        $notification=array(
            'messege'=>'Post successfully deactivated',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification); 

    }

    public function deletepost($id){
       $post = DB::table('posts')->where('id',$id)->first();
       $image = $post->image;
       unlink($image);
       DB::table('posts')->where('id', $id)->delete();
       $notification=array(
        'messege'=>'Post successfully Deleted',
        'alert-type'=>'success'
         );
       return Redirect()->back()->with($notification); 

    }

    public function viewpost($id){
        $all_posts = DB::table('posts')
                          ->join('categories', 'posts.category_id', 'categories.id')
                          ->select('posts.*', 'categories.category_name')
                          ->where('posts.id', $id)
                          ->first();
        
           
        
        return view('admin.post.show', compact('all_posts'));  

    }

    public function editpost($id){
        $post = DB::table('posts')->where('id', $id)->first();
        return view('admin.post.edit', compact('post'));

    }
    public function updatepost(Request $request, $id){
        $data = array();
        $data['title'] = $request->title;
        $data['slug'] = Str::slug($request->title, '-');
        $data['fullname'] = $request->fullname;
        $data['birth_date'] = $request->birth_date;
        $data['death_date'] = $request->death_date;
        $data['birth_date_maually'] = $request->birth_manually;
        $data['death_date_maually'] = $request->death_manually;
        $data['birth_place'] = $request->birth_place;
        $data['death_place'] = $request->death_place;
        $data['category_id'] = $request->category_id;
        $data['full_text'] = $request->full_text;
        $data['description'] = Str::limit(strip_tags($request->full_text), 140);
        $data['tags'] = $request->tags;
        $data['top_slider'] = $request->top_slider;
        $data['low_slider'] = $request->low_slider;
        $data['updated_at'] = \Carbon\Carbon::now();

        $update = DB::table('posts')->where('id', $id)->update($data);
        if ($update) {
            $notification=array(
                'messege'=>'Post successfully updated',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.posts')->with($notification); 
        } else {
            $notification=array(
                'messege'=>'Nothing is updated',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.posts')->with($notification); 
        }

    }
    
    public function updatephoto(Request $request, $id){
        $old_image = $request->old_image;
        $data = array();
        $image = $request->file('image');
        if ($image) {
            unlink($old_image);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/posts/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            $data['image'] = $image_url;
            $brand =DB::table('posts')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Post image successfully updates',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.posts')->with($notification); 

        } else {
            $brand =DB::table('all.posts')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Update without image',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.posts')->with($notification); 
        }
    }
}
