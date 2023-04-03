<?php

namespace App\Http\Requests\Soal;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
         return [
            'question' => [
                'required',
            ],
            'answer_a' => [
                'required',
            ],
            'answer_b' => [
                'required',
            ],
            'answer_c' => [
                'required',
            ],
            'answer_d' => [
                'required',
            ],
            'answer_e' => [
                'required',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'question.required'     => 'Soal harus diisi',
            'answer_a.required'     => 'Jawaban harus diisi',
            'answer_b.required'     => 'Jawaban harus diisi',
            'answer_c.required'     => 'Jawaban harus diisi',
            'answer_d.required'     => 'Jawaban harus diisi',
            'answer_e.required'     => 'Jawaban harus diisi',
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
            $this->redirect = route('dashboard.soal.edit', request()->route()->parameter('id'));
            
        }
        parent::failedValidation($validator);
    }

}
