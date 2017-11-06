<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
            'nome'=>'required|min:5|max:100',
            'certidao_nasc'=>'required|max:20',
            'endereco'=>'required',
            'telefone'=>'required',
            'data_nasc'=>'required|date',
            'turno'=>'required',

        ];
    }

    public function messages()
    {
        return ['nome.min'=>'Minimo de 5 caracteres',
            'nome.required'=>'Campo NOME obrigatório',
            'nome.max'=>'Máximo de 100 caracteres',
            'endereco.required'=>'Campo ENDEREÇO é obrigatório',
            'telefone.required'=>'Campo TELEFONE é obrigatório',
            'certidao_nasc.required'=>'Campo Certidão de Nascimento é obrigatório',
            'data_nasc.required'=>'Campo Data de Nascimento é obrigatório'];
    }
}
