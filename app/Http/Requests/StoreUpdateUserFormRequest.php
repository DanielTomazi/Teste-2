<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' =>  'required|max:100|min:3',
            'email' => 'required|email|max:255',
            'telefone'=> 'required',
            'faturamento'=> 'required|not_in:0',    
 
        ];
     
    }

    public function messages()
    {
        return[
            'nome.required' => 'Informe seu nome completo',
            'nome.max' => 'O nome não pode passar de 100 caracteres',
            'nome.min' => 'O nome deve conter mais de 3 caracteres',
            'email.required' => 'Informe um email válido',
            'email.email' => 'Informe um email válido',
            'email.max' => 'O email não pode passar de 255 caracteres',
            'telefone.required'=> 'Digite um telefone válido com DDD',
            'faturamento.required'=> 'Escolha um valor de faturamento',               
            'faturamento.not_in'=> 'Esse campo deve ter algum valor válido',               

        ];

    }

}
