<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Validar o Login
 * @method static \Illuminate\Http\Response|null authorize()
 * @method static array rules()
 */
class MakeLoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    /**
     * Tenta fazer o login
     * @return bool
     */
    public function tryToLogin(): bool
    {
        $user = User::where('email', $this->email)->first();

        if ($user && Hash::check($this->password, $user->password)) {
            auth()->login($user);
            return true;
        }

        return false;
    }
}
