<?php

namespace App\Http\Controllers;



use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all;
        return view('admin.category-index',compact('categories'));
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
        $this->validate($request,[
            'Name'=>'required'

        ]);
        Category::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //echo $id;
        $data_category = Product::join('categories', 'products.Catid', '=' , 'categories.id')->where('products.Catid', $id)
        ->get(['products.*']);

        $category = Category::find($id);

        $data_favorite =DB::table('favorites')
                ->join('users','favorites.UserId', '=', 'users.id')
                ->join('products', 'favorites.ProductId', '=', 'products.id')
                ->select('products.*','favorites.Liked')
                ->get();
        //echo $data_category;
        return view('category', compact('data_category', 'data_favorite', 'category'));
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

    public function init()
    {
        $data = array(
            array(
                'Name'=>"Áo", //nên nó là số 1 catid
            ),
            array(
                'Name'=>"Áo khoác", 
            ),
            array(
                'Name'=>"Quần", 
            ),
            array(
                'Name'=>"Giày"
            ),
            array(
                'Name'=>"Trang sức", 
            )
        );
        Category::insert($data);
        $test =Category::all();
        echo $test;
    }
}
