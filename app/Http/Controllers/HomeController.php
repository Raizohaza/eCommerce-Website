<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

use Illuminate\Http\Request;

use Mail;

use App\user;

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
    public function edit($UsersId)
    {
        return view('users.edit')->with('Users', Users::find($UsersId));
    }
    public function update($UsersId)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'email' => 'required'
        ]);

        $data = request()->all();

        $Users = user::find($UsersId);
        $Users->name = $data['name'];
        $Users->email = $data['email'];

        $User->save();
        return redirect('/Users');
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
}
