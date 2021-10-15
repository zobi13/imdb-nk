<?php

namespace App\Http\Requests;

use Carbon\Carbon;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required|string|max:255|unique:movies',
            'genre' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:'. Carbon::now()->year,
            'plot' => 'required|string|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title should not be empty',
            'genre.required' => 'Genre should not be empty',
            'director.required' => 'Director should not be empty',
            'year.required' => 'Year should not be empty',
            'plot.required' => 'Plot should not be empty'
        ];
    }
}
