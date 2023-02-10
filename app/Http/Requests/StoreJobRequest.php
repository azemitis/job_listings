<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
        // This is not implemented yet, default Request validation is used instead
        return [
            'title' => 'required|string',
            'organization' => 'required|string',
            // 'degree' => 'required',
            // 'jobType' => 'required',
            // 'locations' => 'required',
            'email' => 'required|email',
            'remote' => 'required|string',
            'day' => 'required|integer',
            'month' => 'required|integer',
            'year' => 'required|integer',
            // 'aboutJob' => 'required',
            // 'responsibilities' => 'required',
            // 'minimumQualifications' => 'required',
            // 'preferredQualifications' => 'required'
        ];
    }
}
