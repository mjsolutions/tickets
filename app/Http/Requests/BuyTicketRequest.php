<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuyTicketRequest extends FormRequest
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
        'asiento' => 'required|array|max:10',
        ];
    }

    public function messages()
    {
        return [
        'asiento.max' => 'No puedes seleccionar mas de 10 boletos',
        ];
    }
}
