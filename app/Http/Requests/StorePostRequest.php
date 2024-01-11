<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Libelle' => 'required | string',
            'Marque' => 'required',
            'Prix' => 'required | numeric',
            'Stock' => 'required | integer | min:1 | max:4',
            'Image' => 'required | file | mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
