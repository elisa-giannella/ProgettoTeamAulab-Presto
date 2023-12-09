<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $announces = Announce::where('is_accepted', true)->take(6)->orderBy('created_at','desc')->get();
        $categories = Category::all();
        return view('home',compact('announces', 'categories'));
    }

    public function searchAnnouncements(Request $request){
        $announces = Announce::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('announcements.index',compact('announces'));
    }

    public function setLanguage($lang){

        session()->put('locale', $lang);
        return redirect()->back();

    }

    public function workwithus(){
        return view('workwithus');
    }

}
