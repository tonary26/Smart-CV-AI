<?php

namespace App\Http\Requests\CV;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CVStoreRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'nullable'],
            'lastname' => ['string', 'nullable'],
            'number' => ['string', 'nullable'],
            'email' => ['string', 'nullable'],
            'education' => ['string', 'nullable'],
            'job' => ['string', 'nullable'],
            'experience' => ['string', 'nullable'],
            'stack' => ['string', 'nullable'],
            'company' => ['string', 'nullable'],
            'language' => ['string', 'nullable'],
            'hobby' => ['string', 'nullable'],
            'user_id' => ['integer', 'nullable']
        ];
    }
}
