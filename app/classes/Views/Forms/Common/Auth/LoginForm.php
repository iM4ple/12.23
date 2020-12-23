<?php

namespace App\Views\Forms\Common\Auth;

use Core\Views\Form;

class LoginForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'fields' => [
                'email' => [
                    'label' => 'Email',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_email',
                        'validate_user_exists'
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite E-mail',
                        ],
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite slaptažodį',
                        ],
                    ],
                ],
            ],
            'buttons' => [
                'login' => [
                    'title' => 'Login',
                ],
            ],
            'validators' => [
                'validate_login' => [
                    'email',
                    'password',
                ]
            ]
        ]);
    }
}