<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Session;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index', ['posts' =>Post::latest()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', ['categories' =>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$categories= Category::all();
		
		$this->validate($request, [
			'title' => 'required',
			'content' => 'required',
			'featured' => 'required|image',
			'category_id' => 'required' 	
		]);
		
		$featured = $request->featured;
		$featuredNewName = time().$featured->getClientOriginalName();
		$featured->move('uploads/images', $featuredNewName);
		
		$post = Post::create([
			'title' => $request->title,
			'content' => $request->content,
			'featured' => '/uploads/images/'.$featuredNewName,
			'category_id' => $request->category_id,
			'slug' => str_slug('title'),
			'user_id' => Auth::id()
		]);
		
		Session::flash('success', 'Post Created');
		
		return redirect()->route('posts.index');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		return view('admin.posts.edit', ['post' => Post::find($id),
										 'categories' =>Category::all() ]);
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
        $post= Post::find($id);
		
		$this->validate($request, [
			'title' => 'required',
			'content' => 'required',
			'category_id' => 'required' 	
		]);
		
		if($request->hasFile('featured')){
			
			$featured = $request->featured;
			$featuredNewName = time().$featured->getClientOriginalName();
			$featured->move('uploads/images',$featuredNewName);
			$post->featured = '/uploads/images/'.$featuredNewName;
		}
		
		$post->title = $request->title;
		$post->content = $request->content;
		$post->category_id = $request->category_id;
		$post->slug = str_slug('title');
		$post->user_id= Auth::id();
				
		Session::flash('success', 'Post Updated');
		
		return redirect()->route('posts.index');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
		$post->delete();
		
		Session::flash('success', 'Post Trashed');
		redirect()->back();
    }
	
	public function bin(){
		
		return view('admin.posts.bin', ['posts' =>Post::onlyTrashed()->get()]);
	}
	
	public function restore($id){
		$post = Post::withTrashed()->where(id, $id)->get();
		$post->category()->restore();
		
		return redirect()->route('posts.index');
	}
	
	public function kill($id){
		$post = Post::withTrashed()->where(id, $id)->get();
		$post->category()->forceDelete();
		
		return redirect()->route('posts.index');
	}
	
}
