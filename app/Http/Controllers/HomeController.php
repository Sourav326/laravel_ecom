<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\Product;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title      = 'Home';
        $products   = Product::where('status','active')->limit(3)->get();
        $blogs      = Blog::where('status','active')->limit(3)->get();
        return view('home',[
            'title'     => $title,
            'products'  =>$products,
            'blogs'     =>$blogs,
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
        $alredyAvailable = Newsletter::where('email',$request->email)->first();
        if($alredyAvailable){
            return response()->json(['fail'=>'You are already a subscriber of Furniture.']);
        } else {
            Newsletter::create([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            return response()->json(['success'=>'Thanks for subscribing Furniture.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
