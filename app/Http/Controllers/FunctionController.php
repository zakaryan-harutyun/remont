<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public static function userTypeName($id){

        $user = User::findOrFail($id);


        return $user->name;
    }
}
