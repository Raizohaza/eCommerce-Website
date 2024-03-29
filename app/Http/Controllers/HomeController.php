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

use App\Models\Delivery_info;


use App\Models\Product_image;
use App\Models\Favorite;
use Exception;
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
        // if(Auth::id()==NULL)
        //     // {
        //     //     $this->middleware('guest')->except('logout');
        //     // }
        //         $this->middleware(['auth','verified']);
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

    // public function indexi()
    // {
    //     return view('welcome');
    // }

    public function init()
    {
        $data_category = Category::all();
        $data_product = Product::all();

        $max = Product::max('id')-10;

        $data_new = DB::table('products')->where('id', '>' , $max)
        ->select('products.*')->get();

        $getUserId = Auth::id();

        $data_favorite =DB::table('favorites')
                ->join('users','favorites.UserId', '=', 'users.id')
                ->join('products', 'favorites.ProductId', '=', 'products.id')
                ->select('products.*')
                ->distinct()
                ->get();
        


        return view('welcome',compact('data_category','data_product', 'data_favorite','getUserId' ,'data_new'));
    }
    
}
