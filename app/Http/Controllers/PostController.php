<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post.index',[
            'posts' => Post::query()->with('user')->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create',[
            'categories' => Category::query()->where('is_active', true)->get(['id', 'name'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // dd($request->all());

        $data = $request->validated();

        if(isset($data['draft'])){
            $data['draft'] = true;
        }
        if($image = $request->file('image')){
            $filename = $image->store('images/posts', 'public');
            $name = explode('.', $image->getClientOriginalName())[0];
            $newName = $name . '.' . $image->getClientOriginalExtension();
            $data['image'] = $newName;
            $data['path'] = $filename;
        }

        try {

            $post = auth()->user()->posts()->create($data);

            foreach ($data['category_id'] as $category) {
                $post->categories()->attach($category);
            }

            return to_route('post.index');

        } catch (\Exception $e) {
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit',[
            'post' => $post,
            'comments' => $post->comments()->paginate(),
            'categories' => Category::query()->get(['id', 'name'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        $data['draft'] = isset($data['draft']) ? true : false;

        if($image = $request->file('image')){
            if ($post->path && Storage::disk('public')->exists($post->path)) {
                Storage::disk('public')->delete($post->path);
            }
            $filename = $image->store('images/posts', 'public');
            $name = explode('.', $image->getClientOriginalName())[0];
            $newName = $name . '.' . $image->getClientOriginalExtension();
            $data['image'] = $newName;
            $data['path'] = $filename;
        }

        if(isset($data['category_id'])){
            $post->categories()->sync($data['category_id']);
        }


        $post->fill($data);

        if($post->save()){
            return to_route('post.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if($post->path){
            Storage::disk('public')->delete($post->path);
        }

        $post->delete();

        return to_route('post.index');
    }
}
