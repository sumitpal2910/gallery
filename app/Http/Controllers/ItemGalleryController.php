<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemGallery;
use Illuminate\Http\Request;

class ItemGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($itemId = 1)
    {
        $item = Item::find(1);
        
        return view('themes.gallery.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemGallery  $itemGallery
     * @return \Illuminate\Http\Response
     */
    public function show(ItemGallery $itemGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemGallery  $itemGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemGallery $itemGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemGallery  $itemGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemGallery $itemGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemGallery  $itemGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemGallery $itemGallery)
    {
        //
    }
}
