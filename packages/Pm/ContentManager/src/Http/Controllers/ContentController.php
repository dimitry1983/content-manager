<?php

namespace Pm\ContentManager\Http\Controllers;

use Illuminate\Routing\Controller;
use Pm\ContentManager\Models\Content;

class ContentController extends Controller
{

    public function index()
    {
        $posts = \Pm\ContentManager\Models\Content::published()
            ->where('type', 'blog')
            ->latest('published_at')
            ->paginate(10);

        return view('contentmanager::blogs.index', compact('posts'));
    }

    public function show($type, $slug)
    {
        $content = Content::published()
            ->where('type', $type)
            ->where('slug', $slug)
            ->firstOrFail();

        return view("contentmanager::{$type}s.show", [
            $type => $content,
        ]);
    }
}
