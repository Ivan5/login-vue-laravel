<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
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
            'usuario' => 'required|email',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'usuario.required' => 'El correo electronico es obligatorio',
            'usuario.email' => 'El correo electronico no corresponde con una dirección de email valida',
            'password.required' => 'La password es requerida'
        ];
    }
}
