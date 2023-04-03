<?php

namespace App\Http\Requests\Kompetensi;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
   public function rules(): array
    {
        return [
            'kompetensi' => [
                'required',
            ],
            'deskripsi' => [
                'required',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'kompetensi.required'     => 'Kompetensi harus diisi',
            'deskripsi.required'     => 'Deskripsi harus diisi',
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
            $this->redirect = route("dashboard.kompetensi.create");
            
        }
        parent::failedValidation($validator);
    }
}
