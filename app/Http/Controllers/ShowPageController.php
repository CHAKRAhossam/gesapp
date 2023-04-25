<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShowPageController extends Controller
{
    public function showpage (){

        $usercount = User::count();
        if ($usercount == 0){
            return redirect('/register');
        }
        else{
            return redirect('/login');
        }
    }
}
