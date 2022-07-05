<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePunchRequest extends FormRequest
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
            'title' => 'required',
            'size-length' => 'numeric|required',
            'size-width' => 'numeric|required',
            'size-height' => 'numeric',
            'knife-size-length' => 'numeric|required',
            'knife-size-width' => 'numeric|required',
            'products' => 'required',
            'machines' => 'required',
            'materials' => 'required',
        ];
    }
}
