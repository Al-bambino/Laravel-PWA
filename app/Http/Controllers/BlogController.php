<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\StoreBlogRequest;

/**
 * Ovaj controller mi sluzi da prikazem validaciju requesta pri store-u
 *
 * @package App\Http\Controllers
 */
class BlogController extends Controller
{
    public function index()
    {
        $all = Blog::all();
        return $all;
    }

    public function create()
    {
        return view('blog.create');
    }

    /**
     * Obratite paznju na tip $request varijable!
     * Trazili smo (method injection) nasu klasu requesta, u kojoj smo izvrsili validaciju
     *
     * @param StoreBlogRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreBlogRequest $request)
    {
        // Ovde ste sigurni da je $request validan

        Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'points' => $request->points
         ]);

        return redirect('/blogs');
    }
}
