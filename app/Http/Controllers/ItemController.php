<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use App\Collection;
use Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            $collections = Collection::all();
            return view('admin.items.create', ['collections' => $collections]);
        };
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->itemStoreUpdate($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    protected function itemStoreUpdate( Request $request, $id = null ){
        if ( Auth::check() ) {
            if ( $id ){
                $item = Item::find($id);
            } else {
                $item = new Item;
            };
            /*['name', 'region', 'platform', 'category', 'type', 'catalog_number', 'isbn', 'sku', 'role', 'directed', 'kojima_team', 'release_date', 'year'];*/
            $item->collection_id = $request->input('collection_id');
            $item->name = $request->input('name');
            $item->region = $request->input('region');
            $item->platform = $request->input('platform');
            $item->category = $request->input('category');
            $item->type = $request->input('type');
            $item->catalog_number = $request->input('catalog_number');
            $item->isbn = $request->input('isbn');
            $item->sku = $request->input('sku');
            $item->role = $request->input('role');
            $item->directed = $request->input('directed');
            $item->kojima_team = $request->input('kojima_team');
            $item->release_date = date("Y-m-d H:i:s", strtotime( $request->input('release_date') ));
            $item->year = $request->input('year');
            $item->slug = str_slug($request->input('name'), "-");
            
            
            try {
                $item->save();
                return redirect('/home/items'); 
            }
            catch (\Illuminate\Database\QueryException $e) {
                var_dump( $e->getMessage() );
                die();
            }
           


          } else {
            return 'No auth';
        };
    }
}
