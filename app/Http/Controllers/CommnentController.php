<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Commnent;

use Exception;

class CommnentController extends Controller
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

    public function ajaxRequestAddComment(Request $request)
    {
        $mgs ='success';
        
        if ($request->Pid != null && $request->Content != null)
        {
            
            try{
                $userId = Auth::id();
                
                $data = array(
                    'ProductId'=>$request->Pid,
                    'Description'=>$request->Content,
                    'UserId'=>$userId,
                    'created_at'=>null,
                    'updated_at'=>null
                );
            
                
                Commnent::insert($data);
                $mgs = 1;
            }
            catch(Exception $ex)
            {
                $mgs = $ex->getMessage();
            }
            
        }
        
        else 
        $mgs= 'Failed';

        
        return response()->json(
            [
                'success' => true,
                'message' => $mgs,
            ]
        );
    }
}
