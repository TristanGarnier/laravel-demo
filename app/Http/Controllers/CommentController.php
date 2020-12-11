<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Comment;
use App\Models\Link;

class CommentController extends Controller
{
    public function index()
    {
        return view('links.index', [
            'links' => Link::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required',
            'link_id' => 'required'
        ]);

        Comment::create($validated);

        return view('links.index', [
            'links' => Link::all()
        ]);
    }
}
