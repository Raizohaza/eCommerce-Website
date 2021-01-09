<?php

namespace App\Http\Controllers\Admin;

use App\user;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function registered()
    {

    	$users = User::all();

    	return view('admin.register')->with('users',$users);

    }
    public function categoried()
    {

    	$categories = Category::all();

    	return view('admin.categorier')->with('categories',$categories);

    }
    // here we create fuction for edit users
    public function registeredit(Request $request, $id)
    {
    	$users = User::findOrFail($id);
    	return view('admin.register-edit')->with('users',$users);
    }

    // here we create function for update button
    public function registerupdate(Request $request, $id)
    {
    	$users = User::find($id);
    	$users->name = $request->input('username');
    	$users->usertype = $request->input('usertype');
    	$users->update();
        
    	return redirect('/role-register')->with('status','data is updated'); 
    }

    //delete function
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status','data deleted');

    }
    public function categoriededit(Request $request, $id)
    {
    	$categories = Category::findOrFail($id);
    	return view('admin.category-edit')->with('categories',$categories);
    }
    public function categoriedupdate(Request $request, $id)
    {
    	$categories = Category::find($id);
    	$categories->name = $request->input('username');
    	
    	$categories->update();
        
    	return redirect('/role-categorier')->with('status','data is updated'); 
    }
    public function categorierdelete($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();

        return redirect('/role-categorier')->with('status','data deleted');

    }
}
