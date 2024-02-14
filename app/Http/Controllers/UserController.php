<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view("create_user");
    }    

    public function store(StoreUserRequest $request) {
        return view('create_user');
    }
}
