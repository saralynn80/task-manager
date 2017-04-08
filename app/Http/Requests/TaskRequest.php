<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'general_duedate' => 'required|min:3',
            'due_date' => 'required|date',
        ];

        /**
        * Since the rules may change when updating vs. creating, make $rules into an array and then the following:
        *if ($condition) {
            *$rules['something_else'] = 'required';
        *} return $rules; */
    }
}
