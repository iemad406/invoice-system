<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
class UserValidationData extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
             'password'=>[
                'required',
                  Password::min(10)
                ->mixedCase()      
                ->letters()        
                ->numbers()      
                ->symbols(),
                'confirmed'
             ]
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Email address is mandatory.',
            'email.email' => 'Please enter a valid email format.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Password cannot be empty.',
            'password.min' => 'Password must be at least 10 characters.',
            'password.confirmed' => 'Passwords do not match.',
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => 'Email Address',
            'password' => 'Password',
        ];
    }
}
