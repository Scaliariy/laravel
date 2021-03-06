<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'code' => 'required|min:3|max:255|unique:products,code',
            'name' => 'required|min:3|max:255',
//            'description' => 'required|min:5',
        ];

        if ($this->route()->named('products.update')) {
            $rules['code'] .= ',' . $this->route()->parameter('product')->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для ввода',
            'min' => 'Поле :attribute повинно мати мінімум :min символов',
            'max' => 'Поле :attribute повинно мати максимум :max символов',
            'code.min' => 'Поле код повинно мати мінімум :min символов',
            'price.min' => 'Поле :attribute повинно мати мінімум значение :min',
            'unique' => 'Такой :attribute уже существует',

        ];
    }
}
