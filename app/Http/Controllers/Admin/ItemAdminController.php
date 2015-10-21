<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use App\Collection;
use App\Image;

class ItemAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$items = Item::all();
        return view('admin.items.index', ['items' => $items]);
    }
    public function manage($id){
        $item = Item::find($id);
        return view('admin.items.manage', ['item' => $item]);
    }
    public function allImages(){
        $images = Image::all();
        return $images;
    }

}
