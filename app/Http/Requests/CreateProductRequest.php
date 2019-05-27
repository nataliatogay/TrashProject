<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:50'],
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            // 'img_path' => 'required',
        ];
    }
}
