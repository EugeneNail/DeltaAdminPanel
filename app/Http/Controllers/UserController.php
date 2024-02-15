<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create() {
        return view("pages.create_user");
    }

    public function store(StoreUserRequest $request) {
        $file = $request->file('photo');
        $photo_path = uniqid().'.jpg';
        Storage::disk('public')->put($photo_path, file_get_contents($file));
        $user = User::create($request->validated() + [
            'photo_path' => $photo_path
        ]);

        return redirect("/users/$user->id");
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect()->back();
    }
}
