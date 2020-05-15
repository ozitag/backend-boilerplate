<?php

namespace App\Http\Requests\Core;

use App\Http\Requests\FormRequest;

/**
 * Class AuthRequest
 * @package App\Http\Requests\Api\Guest\auth
 *
 * @var string login
 * @var string $password
 */
class AuthRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'login' => 'string|required',
            'password' => 'string|required'
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Login is required',
            'password.required' => 'Password is required',
        ];
    }
}
