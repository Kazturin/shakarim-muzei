<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacultyHistoryRequest extends FormRequest
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
            'title_kz' => 'required|string',
            'content_kz' => 'nullable|string',
            'title_ru' => 'required|string',
            'content_ru' => 'nullable|string',
            'title_en' => 'nullable|string',
            'content_en' => 'nullable|string',
            'faculty_id' => 'required',
        ];
    }
}
