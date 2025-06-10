<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
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
        'trip_id' => 'sometimes|bigInteger',
        'name' => 'sometimes|string',
        'email' => 'sometimes|string',
        'number_of_people' => 'sometimes|integer|min:1',
        'status' => 'sometimes|string|in:pending,cancelled,confirmed'
        ];
    }
}
