<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Course;
use Auth;

class WishlistController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $wishlists = Wishlist::where('user_id',$user_id)->get();
        foreach($wishlists as $wishlist){
            $courses[] =  Course::find($wishlist->id);
        }
        return view('wishlist.index',['courses'=>$courses,'title'=>'Wishlist']);
    }

    public function store(Request $request){
        $wishlist = Wishlist::create([
            'course_id' => $request->course_id,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->back()->with('success', 'Course added to wishlist');
    }
}
