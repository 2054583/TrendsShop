<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
      public function search()
    {
        return view('user');
    }

    public function autocomplete(Request $request)
    {        
        $data = User::select("name")
                ->where("name","LIKE","%{$request->str}%")
                ->get('query');   
        return response()->json($data);
    }
}
