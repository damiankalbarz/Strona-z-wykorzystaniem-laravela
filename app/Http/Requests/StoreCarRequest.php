<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
             'name' => 'required|in:Audi A7,Audi A6,Audi A5,Audi A4,Audi A3',
             'own_name' => 'required|max:30|min:3',
             'user_id'

        ];
    }
}
