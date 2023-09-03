<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $products = Product::all();
        $users = User::all();
        return view('admin.dashboard',compact('products','users'));
    }

  public function changeUserRole(User $user, Request $request){

$profile = $user->profile;

$profile->update([

'role' => $request->input('role')

]);


return redirect()->route('admin.dashboard');

  }
}
