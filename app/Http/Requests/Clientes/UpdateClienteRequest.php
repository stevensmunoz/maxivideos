<?php

namespace App\Http\Requests\Clientes;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
            'cedula' => 'required|numeric',
            'nombre' => 'required|alpha',
            'direccion' => 'required',
            'telefono' => 'required|numeric',
            'correo' => 'required|email',
        ];
    }

    public function messages()
    {
         return[
            'cedula.required' => 'El campo cedula es requerido',
            'cedula.numeric' => 'El campo cedula debe ser numerico',
            'nombre.required' => 'El campo nombre es requerido',
            'nombre.alpha' => 'El campo nombre no debe contener numeros ni espacios',
            'direccion.required' => 'El campo direccion es requerido',
            'telefono.required' => 'El campo telefono es requerido',
            'telefono.numeric' => 'El campo telefono debe ser numerico',
            'correo.required' => 'El campo correo es requerido',
            'correo.email' => 'El campo correo no tiene un formato valido',
        ];
    }
}
