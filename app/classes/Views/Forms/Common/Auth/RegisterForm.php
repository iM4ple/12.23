<?php

namespace App\Views\Forms\Common\Auth;

use Core\Views\Form;

class RegisterForm extends Form
{
    public function __construct()
    {
        parent::__construct([
                'fields' => [
                    'name' => [
                        'label' => 'Vardas',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_not_numeric',
                            'validate_length' => [
                                'max' => 40,
                            ],
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Vardas',
                            ]
                        ]
                    ],
                    'surname' => [
                        'label' => 'Pavardė',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_not_numeric',
                            'validate_length' => [
                                'max' => 40,
                            ],
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Pavardė',
                            ]
                        ]
                    ],
                    'email' => [
                        'label' => 'El. paštas',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_email',
                            'validate_user_unique',
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'E-paštas',
                            ]
                        ]
                    ],
                    'password' => [
                        'label' => 'Slaptažodis',
                        'type' => 'password',
                        'validators' => [
                            'validate_field_not_empty',
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'sportas123',
                            ]
                        ]
                    ],
                    'password_repeat' => [
                        'label' => 'Pakartokite slaptažodį',
                        'type' => 'password',
                        'validators' => [
                            'validate_field_not_empty',
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'sportas123',
                            ]
                        ]
                    ],
                    'phone' => [
                        'label' => 'Telefono Nr. (nebūtina)',
                        'type' => 'text',
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Įveskite telefono Nr.',
                            ]
                        ]
                    ],
                    'address' => [
                        'label' => 'Adresas (nebūtina)',
                        'type' => 'text',
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Įveskite adresą',
                            ]
                        ]
                    ],
                ],
                'buttons' => [
                    'register' => [
                        'title' => 'REGISTRUOKITĖS!',
                    ]
                ],
                'validators' => [
                    'validate_fields_match' => [
                        'password',
                        'password_repeat'
                    ]
                ]
            ]
        );
    }
}