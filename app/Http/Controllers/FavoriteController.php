<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\Product;

use App\Models\Favorite;



class FavoriteController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, $Liked)
    {
        
        
        $data_fav = new Favorite;
        $data_fav->ProductId = $id;
        $data_fav->UserId = Auth::id();
        if($Liked == '1')
        {
            $data_fav->Liked = false;
            alert('Thêm xóa khỏi danh sách yêu');
        }
        else
        {
            $data_fav->Liked = true;
            alert('Thêm thêm vào danh sách yêu');
        }
        
        
        $data_fav.save();
        //
        

        //$data_favorite.save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data_favorite =DB::table('favorites')
        ->join('users','favorites.UserId', '=', 'users.id')
        ->join('products', 'favorites.ProductId', '=', 'products.id')
        ->select('products.*','favorites.Liked')
        ->get();
        return view('/favorite', compact('data_favorite'));
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

    public function getFav(Request $request)
    {
        return view('getFavAjax');
    }

    public function getFavAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');  // query la product->id
            $data_fav = new Favorite;
            $data_fav->ProductId = $query;
            $data_fav->UserId = Auth::id();
            $data_fav->Liked = true;
            $data_fav.save();
            
       }
    }
}
