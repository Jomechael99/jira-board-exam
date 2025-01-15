<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {

        return match ($this->getMethod()) {
            'POST' => [
                'description' => ['required'],
                'status_id' => ['nullable', 'integer']
            ],
            'PUT' => [
                'status_id' => ['nullable', 'integer']
            ],
            default => [],
        };
    }
}
