<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Mail;

use App\user;

use App\Models\Category;

use App\Models\User as getUser;

use App\Models\Product;


use App\Models\Product_image;
use App\Models\Favorite;
use SebastianBergmann\Environment\Console;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($UsersId)
    {
        return view('users.edit')->with('Users', user::find($UsersId));
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($UsersId)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12|',
            'email' => 'required|'
        ]);

        $data = request()->all();

        $Users = user::find($UsersId);
        $Users->name = $data['name'];
        $Users->email = $data['email'];

        $Users->save();
        return redirect('/home');
    }
    public function send_mail()
    {
                 //send mail
                 $to_name = "Le Cuong example";
                 $to_email = "acquy515@gmail.com";//send to this email
                
              
                 $data = array("name"=>"Mail từ tài khoản Khách hàng","body"=>'Mail khôi phục'); //body of mail.blade.php
                 
                 Mail::send('users.send_mail',$data,function($message) use ($to_name,$to_email){
 
                     $message->to($to_email)->subject('Test thử gửi mail google');//send this mail with subject
                     $message->from($to_email,$to_name);//send from this mail
                 });

                return redirect('/')->with('message','');
                 //--send mail
    }

    public function profile()
    {
        $users = Auth::user();
        return view('profile')->with(['user' => $users]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function init()
    {
        $data_category = Category::all();
        $data_product = Product::all();

        $max = Product::max('id');

        $data_new = DB::table('products')->where('products.id', '<=', $max )->orWhere('products.id', '>' , ($max-10))->get();

        $getUserId = Auth::id();

        $data_favorite =DB::table('favorites')
                ->join('users','favorites.UserId', '=', 'users.id')
                ->join('products', 'favorites.ProductId', '=', 'products.id')
                ->select('products.*')
                ->get();
        



        return view('welcome',compact('data_category','data_product', 'data_favorite','getUserId' ,'data_new'));
    }

    public function ajaxRequest()
    {
        $userId = Auth::id();
        $purchase_details =  DB::table('purchase_details')
            ->join('purchases', 'purchases.id', '=', 'purchase_details.PurchaseId')
            ->join('products', 'products.id','=','purchase_details.ProductId')
            ->where('purchases.userId', '=', $userId)
            ->select('purchase_details.*','products.*')
            ->get();
        //echo $purchase_details;
        return view('cart', compact('purchase_details'));
    }

    public function ajaxRequestPost(Request $request)
    {
        if ($request->Quantity !=null)
        DB::table('categories')->insert([
            'Name' => $request->Quantity
        ]);
        
        else 
        $mgs= json_encode($request);

        $mgs= $request->Code;

        return response()->json(
            [
                'success' => true,
                'message' => $mgs,
            ]
        );
    }
    
}
