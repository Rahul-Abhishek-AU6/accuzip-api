<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index')->with(['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.add-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);

        $imagePath = Storage::put('post', $request->image);

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = Auth::user()->id;
        $post->seo_title = $request->seo_title;
        $post->image = $imagePath;
        $post->slug = $this->createSlug($request->title);
        $post->meta_description = $request->meta_desc;
        $post->meta_keywords = $request->meta_keyword;
        $post->status = $request->status;
        $post->category = $request->category;
        if ($request->featured) {
            $post->featured = $request->featured;
        }

        if ($post->save()) {
            return redirect()->route('admin.posts.index')->with(['type'=>'success','message'=>'Post Created']);
        }

        return back()->with(['type'=>'error','message'=>'Woops something went wrong!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('slug',$id)->first();
        return view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('slug',$id)->first();
        return view('admin.post.add-edit',compact('post'));
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
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        
        $post = Post::where('slug',$id)->first();

        if ($request->image) {
            $imagePath = Storage::put('post', $request->image);
        }

        if ($post) {
            $post->title = $request->title;
            $post->body = $request->body;
            $post->seo_title = $request->seo_title;
            if ($request->image && $imagePath) {
                $post->image = $imagePath;
            }            
            $post->slug = $this->createSlug($request->title);
            $post->meta_description = $request->meta_desc;
            $post->meta_keywords = $request->meta_keyword;
            $post->status = $request->status;
            $post->category = $request->category;
            if ($request->featured) {
                $post->featured = $request->featured;
            }

            if ($post->save()) {
                return redirect()->route('admin.posts.index')->with(['type'=>'success','message'=>'Post Updated']);
            }

            return redirect()->route('admin.posts.index')->with(['type'=>'error','message'=>'Something went wrong']);
        }

        return redirect()->route('admin.posts.index')->with(['type'=>'error','message'=>'Something went wrong']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Post::where('slug',$id)->first();

        if ($data) {
            $data->delete();

            return back()->with(['type'=>'success','message'=>'Deleted success!']);
        }

        return back()->with(['type'=>'error','message'=>'Record not found!']);
    }

    protected function getRelatedSlugs($slug, $id = 0) {
        return Post::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();
    }

    public function createSlug($title, $id = 0) {
        // Normalize the title
        $slug = Str::slug($title, '-');

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);

        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }
}
