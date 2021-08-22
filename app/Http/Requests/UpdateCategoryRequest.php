<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:5', 'max:191'],
            'description' => ['required', 'string']
        ];
    }

    public function messages() : array
    {
        return [
            'required' => 'Это поле обязательно заполняем (Поле: :attribute)'
        ];
    }

    public function attributes() : array
    {
        return [
            'title'  => 'заголовок',
            'description' => 'описание',
        ];
    }
}
