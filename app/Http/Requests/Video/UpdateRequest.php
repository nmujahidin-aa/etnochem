<?php

namespace App\Http\Requests\Video;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => [
                'required',
            ],
            'video' => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'     => 'Totle harus diisi',
            'video.required'     => 'Video harus diisi',
            'description.required'     => 'Deskripsi harus diisi',
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
            $this->redirect = route('dashboard.faqs.edit', request()->route()->parameter('id'));
            
        }
        parent::failedValidation($validator);
    }

}
