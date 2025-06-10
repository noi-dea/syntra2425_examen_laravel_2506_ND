<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTripRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'title' => 'sometimes|string',
        'region' => 'sometimes|string|in:west,east,north,central',
        'start_date' => 'sometimes|date',
        'duration_days' => 'sometimes|integer|min:1',
        'price_per_person' => 'sometimes|numeric|min:0.01'
        ];
    }
}
