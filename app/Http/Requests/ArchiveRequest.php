<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArchiveRequest extends FormRequest
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
            'title_kz' => ['required', 'string', 'max:255'],
            'title_ru' => ['required', 'string', 'max:255'],
            'title_en' => ['string', 'max:255'],
            'description_kz' => ['nullable','string'],
            'description_ru' => ['nullable','string'],
            'description_en' => ['nullable','string'],
            'file' => [Rule::when(request()->isMethod('POST'), 'required'),Rule::when(request()->isMethod('PUT'), 'nullable'),'file','max:4096'],
        ];
    }
}
