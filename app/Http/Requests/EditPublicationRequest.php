<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPublicationRequest extends FormRequest
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
      /*  return [
          'input-img'=>['required'],
        ];

        */
    }

    public function publications()
    {
      //return ['input-img.required'=>'Debe seleccionar una imagen'];
    }
}
