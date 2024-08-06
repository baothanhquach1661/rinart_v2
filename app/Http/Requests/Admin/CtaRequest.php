<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CtaRequest extends FormRequest
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
            'image' => ['image', 'max:10000'],
            'name' => ['string', 'max:100'],
            'title' => ['required', 'max:200'],
            'description' => ['required'],
            'btn_url' => ['url'],
            'video_url' => ['url']
        ];
    }
}
