<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
            ],
            'email' => [
                'required',
                'unique:users,email'
            ],
            'role' => [
                'required',

            ],
            'password' => [
                'required',
                'min:8',
                'confirmed',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'     => 'Nama harus diisi',
            'email.required'    => 'Email harus diisi',
            'role.required'    => 'Role harus diisi',
            'password.required' => 'Password harus diisi',
            'password.min'      => 'Password minimal 8 karakter',
            'password.confirmed'=> 'Password konfirmasi tidak sesuai',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
        if (! $this->wantsJson()) {
            $errors = implode('<br>', $validator->errors()->all());
            alert()->html('Gagal',$errors,'error');
            $this->redirect = url("/register");
        }
        parent::failedValidation($validator);
    }
}