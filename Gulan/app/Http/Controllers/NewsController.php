<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\models\Post;
use App\models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;


class NewsController extends Controller
{

    public function create(){
       
        $posts = Post::all();
        return view('news.create',compact('posts'));
    
    }  

    public function search(Request $request){

        $search = $request->search;
        $posts = post::where(function($query) use ($search){
            $query->where('title','like',"%$search%")
            ->orWhere('description','like',"%$search%");
        })
        ->orWhereHas('category',function($query) use ($search){

            $query->where('name','like',"%$search%");
        })
        ->orWhereHas('user',function($query) use ($search){
            $query->where('name','like',"%$search%");
        })
        ->get();

        return view('news.create',compact('posts','search'));
        

    }

    public function user_post(Request $request){


        $post = new post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id  = $request->category_id ;
        $post->user_id = auth()->id();

        $post->save();

      Alert::success('CONGRATS', 'You have added the Post successfully!');
        return redirect()->back();

    }

    public function delete_post($id){

        $post= post::find($id);
        $post->delete();

        return redirect()->back()->with('message','post deleted succesfully');
    }
    public function delete_event($id){

        $events= event::find($id);
        $events->delete();

        return redirect()->back()->with('message','post deleted succesfully');
    }

    public function edit_post_page($id){

        $post= post::find($id);
        return view('news.logic',compact('post'),[ 'categories' => category::all()
    ]);
     
    }
    public function edit_event_page($id){

        $events= event::find($id);
        return view('news.editevent',compact('events'));
     
    }

    public function edit_post(Request $request ,$id){
        
        $post= post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;

        $post->save();
        return redirect()->back();
        

    }

    public function edit_event(Request $request ,$id){
        
        $events= event::find($id);
        $events->title=$request->title;
        $events->description=$request->description;
        $events->startdate = $request->startdate;
        $events->location = $request->location;
        
        $image=$request->image ;


        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('eventimage',$imagename);

            $events->image=$imagename;
        }

        $events->save();        
        return redirect()->back();
        

    }

    public function logic() {
        return view('news.logic');
        
    }
    public function process() {

        
        return view('news.process', [
            'categories' => category::all()
        ]);
         
    }
    public function Office() {
        return view('news.Office');
        
    }
    public function Event() {
        $events = event::all();
        return view('news.event',compact('events'));
        
    }

    public function Eventadd() {
        return view('news.eventadd');
         
        
    }
     public function user_event(Request $request){


        $events = new event;
        $events->title = $request->title;
        $events->description = $request->description;
        $events->category_id  = $request->category_id ;
        $events->startdate = $request->startdate;
        $events->location = $request->location;
        
        
        $image=$request->image ;


        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('eventimage',$imagename);

            $events->image=$imagename;
        }

        $events->save();
        Alert::success('CONGRATS', 'You have added the Event successfully!');

        return redirect()->back();

     
    }
    public function welcome() {
        return view('welcome');
        
    }
    public function about() {
        return view('about');
        
    }
    public function conact() {
        return view('contact');
        
    }
    public function events() {
        return view('events');
        
    }
    public function newss() {
        return view('newss');
        
    }

   
   
      
}



