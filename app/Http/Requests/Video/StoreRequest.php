<?php

namespace App\Http\Requests\Video;

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
            'title.required'     => 'title harus diisi',
            'video.required'     => 'video harus diisi',
            'description.required'     => 'description harus diisi',
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
            $this->redirect = route("dashboard.video.create");
            
        }
        parent::failedValidation($validator);
    }
}
