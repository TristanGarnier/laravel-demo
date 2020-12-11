<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Link;

class LinkController extends Controller
{

    public function index()
    {
        return view('links.index', [
            'links' => Link::all()
        ]);
    }

    public function show(Link $link)
    {
        return view('links.show', [
            'link' => $link,
            'comments' => [
                'Bonjour',
                'Super Site',
                'WoW',
                'Symfony > Laravel'
            ]
        ]);
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'url' => 'required|url'
        ]);

        Link::create($validated);

        return view('links.index', [
            'links' => Link::all()
        ]);
    }
}
