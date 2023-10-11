<?php

namespace App\Http\Requests;

use App\Models\Groups;
use App\Rules\MaxStudentsPerGroup;
use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
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
            'name'=> 'required',
            'surname' => 'required',
            'age' => 'integer',
            'group_id' => ['required', function ($attribute, $value, $fail) {
                $group = Groups::find($value);
                if ($group->isFull()) {
                    $fail('The group is already full (maximum of 6 students allowed).');
                }
            }],
        ];
    }
}
