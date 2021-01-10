<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCandidatoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:255',
            'email' => 'required',
            'idade' => 'required',
            'linkedin' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'Informe no mínimo 3 caracteres.',
            'nome.max' => 'Não pode exceder 255 caracteres.',
            'email.required' => 'O campo email é obrigatório!',
            'idade.required' => 'O campo idade é obrigatório!',
            'linkedin.required' => 'A URL do linkedin é obrigatório!',
        ];
        
    }
}
