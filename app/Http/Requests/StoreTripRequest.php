<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTripRequest extends FormRequest
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
        'title' => 'required|string',
        'region' => 'required|string|in:west,east,north,central',
        'start_date' => 'required|date',
        'duration_days' => 'required|integer|min:1',
        'price_per_person' => 'required|numeric|min:0.01'
        ];
    }
}
