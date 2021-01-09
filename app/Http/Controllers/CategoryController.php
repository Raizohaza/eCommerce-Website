<?php

namespace App\Http\Controllers;



use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
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
    public function store(Request $request)
    {
        //
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
        //echo $data_category;
        return view('category', compact('data_category'));
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
