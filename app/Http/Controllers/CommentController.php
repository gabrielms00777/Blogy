<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function change(Request $request, Comment $comment)
    {
        $comment->fill(['visible' => !$comment->visible]);
        if($comment->save()){
            return back();
        }

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comment.index',[
            'comments' => Comment::query()->with('post')->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'post_id' => ['required', 'exists:posts,id'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'message' => ['required', 'max:255'],
        ]);

        try {

            Comment::query()->create($data);
            session()->flash('comment::created');
            return back()->with('comment::created', 'Comentario enviado com sucesso, em breve ele aparecera no site!');

        } catch (\Exception $e) {
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
