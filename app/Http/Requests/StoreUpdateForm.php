<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateForm extends FormRequest
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
        if($this->isMethod('post')){
            return [
                'nome' => 'required|min:3|max:160',
                'sobrenome' => 'required|min:3|max:160',
                'descricao' => 'required|min:3|max:10000',
                'image' => 'required|mimes:png,jpeg',
        ];
        }

        return [
            'nome' => 'required|min:3|max:160',
            'sobrenome' => 'required|min:3|max:160',
            'descricao' => 'required|min:3|max:10000',
            'image' => 'nullable|mimes:png,jpeg',
        ];
    }
}
