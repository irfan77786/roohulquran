<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
     */
    public function rules(): array
    {
        $user = $this->route('user');
        $userId = $user ? (is_object($user) ? $user->id : $user) : $this->route('id');
        
        return [
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($userId)],
            'password' => 'nullable|string|min:8',
            'phone' => 'nullable|string|max:20',
            'status' => 'required|in:active,inactive,suspended',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
            'status.required' => 'The status field is required.',
            'status.in' => 'The status must be one of: active, inactive, suspended.',
            'avatar.image' => 'The avatar must be an image.',
            'avatar.max' => 'The avatar must not exceed 2MB.',
        ];
    }
}

