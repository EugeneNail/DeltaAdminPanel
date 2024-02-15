<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create() {
        return view("pages.create_user");
    }


    public function store(StoreUserRequest $request) {
        $user = User::create($request->validated() + [
            'photo_path' => $this->savePhoto($request->file('photo'))
        ]);

        return redirect("/users/$user->id");
    }


    public function index() {
        $users = User::paginate(50);
        return view('pages.index_users', ['users' => $users]);
    }


    public function destroy(User $user) {
        $user->delete();

        return redirect()->back();
    }


    public function edit(User $user) {
        $user->born_at = Carbon::parse($user->born_at)->format("Y-m-d");

        return view("pages.edit_user", ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, User $user) {
        $user->fill($request->validated());

        if ($file = $request->file('photo')) {
            $user->photo_path = $this->savePhoto($file);
        }
        $user->save();

        return redirect('/users');
    }

    private function savePhoto(UploadedFile $file): string {
        $photo_path = uniqid().'.jpg';
        Storage::disk('public')->put($photo_path, file_get_contents($file));

        return $photo_path;
    }
}
