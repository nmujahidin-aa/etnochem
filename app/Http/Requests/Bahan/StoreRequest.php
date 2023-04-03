<?php

namespace App\Http\Requests\Bahan;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => [
                'required',
            ],
            'file' => [
                'required',
                'max:20480',
                'mimes:jpeg,bmp,png,gif,svg,jpg,pdf',
            ],
            'description' => [
                'required',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'file.required'     => 'file harus diisi',
            'title.required'     => 'Judul harus diisi',
            'description.required'     => 'Deskripsi harus diisi',
            'file.mimes' => 'file harus berupa jpeg, bmp, png, gif, svg , jpg , pdf',
            'file.max' => 'file tidak boleh lebih dari 20MB',
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
            $this->redirect = route("dashboard.bahan.create");
            
        }
        parent::failedValidation($validator);
    }
}