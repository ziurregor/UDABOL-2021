<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class asistenteFormRequest extends FormRequest
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
            'ci'=>'numeric|required|min:1000000|max:9999999999',
            'nombre'=>'required|max:50|regex:/^[\pL\s\-]+$/u',
            'apellidos'=>'required|max:200|regex:/^[\pL\s\-]+$/u',
            'correo'=>'required|max:200',
            'celular'=>'numeric|required|min:44000000|max:99999999'        
        ];
    }
}
