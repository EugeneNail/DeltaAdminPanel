<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'alpha', 'string', 'min:3', 'max:20'],
            'last_name' => ['required', 'string', 'alpha', 'min:3', 'max:20'],
            'patronymic' => ['required', 'string', 'alpha', 'min:3', 'max:20'],
            'phone_number' => ['required', 'string', 'regex:/^\d \d{3} \d{3}-\d{2}-\d{2}$/'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'login' => ['required', 'string', 'alpha_num', 'unique:users,login', 'min:3', 'max:20'],
            'password' => ['required', 'string', Password::min(8)->max(32)->mixedCase()->numbers()->letters()],
            'born_at' => ['required', 'string', 'date', 'after:1940-01-01', 'before:now'],
            'photo' => ['required', File::types(['jpeg', 'png','jpg'])->min(32)->max(5 * 1024)]
        ];
    }
}
