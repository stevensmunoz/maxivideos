<?php

namespace App\Http\Requests\Directors;
use App\Director;

use Illuminate\Foundation\Http\FormRequest;

class StoreDirectorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //cuando esta en falso al usuario le aparece un error 403 de permisos
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
            'nombre' => 'required|alpha',
            'nacionalidad' => 'required|alpha',
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'El campo nombre es requerido',
            'nombre.alpha' => 'El campo nombre no puede contener numeros',
            'nacionalidad.required' => 'El campo nacionalidad es requerido',
            'nacionalidad.alpha' => 'El campo nacionalidad no debe contener numeros',

        ];
    }
}
