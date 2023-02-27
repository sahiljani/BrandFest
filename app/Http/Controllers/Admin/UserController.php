<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function list(Request $request){        
        $users = User::all();
        return view('admin.userlist', compact('users'));           
    }  
    
}
