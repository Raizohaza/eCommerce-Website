<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\Models\Delivery_info;
use App\Models\Purchase;
use Exception;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $purchase_details =  DB::table('purchase_details')
            ->join('purchases', 'purchases.id', '=', 'purchase_details.PurchaseId')
            ->join('products', 'products.id','=','purchase_details.ProductId')
            ->where('purchases.userId', '=', $userId)
            ->select('purchase_details.*','products.*')
            ->get();
        echo $purchase_details;
        return view('cart', compact('purchase_details'));
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

    public function ajaxRequest()
    {
        $userId = Auth::id();
        $purchase_details =  DB::table('purchase_details')
            ->join('purchases', 'purchases.id', '=', 'purchase_details.PurchaseId')
            ->join('products', 'products.id','=','purchase_details.ProductId')
            ->where('purchases.userId', '=', $userId)
            ->where('purchases.Status', '=','1')
            ->select('purchase_details.*','products.*')
            ->get();

        $sum = DB::table('purchase_details')->sum('SubTotal');
        
        $_purchaseId = -1;
        foreach($purchase_details as $item)
        {
            $_purchaseId=$item->PurchaseId;
            break;
        }
        //if($purchase_details->Status == 2)
        return view('cart', compact('purchase_details','_purchaseId', 'sum'));
    }

    public function ajaxRequestUpdatePurchase(Request $request)
    {
        $mgs ='success';
        if ($request->NameCus !=null)
        {
            $data = array(
                'NameCus'=>$request->NameCus,
                'TelCus'=>$request->TelCus,
                'AddressCus'=>$request->AddressCus,
                'NoteCus'=>$request->NoteCus, 
                'PurchaseId'=>$request->PurchaseId,
                'created_at'=>null,
                 'updated_at'=>null
            );
            try{
                Delivery_info::insert($data);
                $id = (int)$request->PurchaseId;
                $purchase = Purchase::find($id);

                $purchase->Status = 2;

                $purchase->save();
            }
            catch(Exception $ex)
            {
                $mgs = json_encode ($ex);
            }
            $this->ajaxRequest();
        }
        
        else 
        $mgs= 'failed';

        
        return response()->json(
            [
                'success' => true,
                'message' => $mgs,
            ]
        );
    }
}
