<?php

namespace App\Views\Forms;

use Core\Views\Form;

class FeedbackCreateForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'fields' => [
                'text' => [
                    'label' => 'Jūsų Komentaras',
                    'type' => 'textarea',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_length' => [
                            'max' => 400,
                        ],
                    ],
                ],
            ],
        ],
        );

        $this->data['attr']['id'] = 'comment-create-form';
        $this->data['buttons']['create'] = [
            'title' => 'Siųsti komentarą!',
        ];
    }
}