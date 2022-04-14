<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
        $rules = [
            'nome' => 'required|min:3',
            'qtd_temporadas' => 'required|integer'
        ];
        return $rules;

    }

    public function messages(){
        return [
            'required' =>"O campo :attribute é obrigatório",
            'nome.min'=> 'O campo    nome precisa ter pelo 2 caracteres',
            'qtd_temporadas' => 'Informe o número de temporadas'
        ];
    }
}
