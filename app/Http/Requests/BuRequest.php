<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuRequest extends FormRequest
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


            'bu_type' =>  ['required'],
            'bu_name' =>  ['required','string', 'max:100'],
            'bu_price' =>  ['required'],
            'bu_square' =>  ['required','string', 'max:100'],
            'bu_small_dis' =>  ['required','string', 'max:100'],
            'bu_meta' =>  ['required','string', 'max:100'],
            'bu_langtude' =>  ['required','string', 'max:100'],
            'bu_latetude' =>  ['required','string', 'max:100'],
            'bu_status' =>  ['required','string', 'max:100'],
            'bu_rant' =>  ['required'],
            'bu_large_dis' =>  ['required','string', 'max:200'],
            'bu_rooms' =>  ['required'],



        ];
    }
}
