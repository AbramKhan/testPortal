<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'salary' => 'required|integer|min:0',
            'position' => 'required|integer|min:1',
            'address' => 'required',
            'job_responsibilities' => 'required',
            'required_skills' => 'required',
            'deadline' => 'required',
            'vacancy' => 'required',
            'categories' => ['required', 'array', 'min:1'],
            'locations' => ['required', 'array', 'min:1'],
        ];
    }
}
