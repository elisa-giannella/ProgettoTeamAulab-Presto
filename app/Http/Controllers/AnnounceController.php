<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $announces = Announce::where('is_accepted', true)->orderBy('created_at','desc')->get();
        // $announces = Announce::where('is_accepted', true)->paginate(6);
        return view('announcements.all',compact('announces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Announce $announce)
    {
        return view('announcements.show', compact('announce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announce $announce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announce $announce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announce $announce)
    {
        //
    }

    public function filterByCategory(Category $category){

        $announces = Announce::where('is_accepted', true)->where('category_id', "{$category->id}")->orderBy('created_at','desc')->get();

        return view('announcements.category', compact('category', 'announces'));
    }
}
