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
            'size-length' => 'required|numeric',
            'size-width' => 'required|numeric',
            'size-height' => '',
            'knife-size-length' => 'required|numeric',
            'knife-size-width' => 'required|numeric',
            'products' => 'required',
            'machines' => 'required',
            'materials' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Необходимо ввести название',
            'products.required' => 'Выберите хотя бы один продукт',
            'materials.required' => 'Выберите хотя бы один материал',
            'machines.required' => 'Выберите машину',            
            'required' => 'Заполните это поле',
            'subject.numeric' => 'Поле должно содержать число',
        ];
    }
}
