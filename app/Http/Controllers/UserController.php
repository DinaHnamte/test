<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        $userModel = new User();
        if(User::where(['email' => $request->email])->first()){
            return ['success' => false, 'message' => 'Email already exists'];
        }
        try{
            $userModel->fill($request->all());
            $userModel->save();
            return ['success' => true];
        }catch(Exception $e){
            return ['success' => false];
        }
    }
}
