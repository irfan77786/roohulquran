<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePermissionRequest extends FormRequest
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
        $permission = $this->route('permission');
        $permissionId = $permission ? (is_object($permission) ? $permission->id : $permission) : $this->route('id');
        
        return [
            'name' => ['required', 'string', 'max:255', Rule::unique('permissions', 'name')->ignore($permissionId)],
            'module' => 'required|string|max:255',
            'description' => 'nullable|string|max:500'
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'The permission name is required.',
            'name.unique' => 'This permission name already exists.',
            'module.required' => 'The module name is required.',
            'description.max' => 'The description must not exceed 500 characters.',
        ];
    }
}

