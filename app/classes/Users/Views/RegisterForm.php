<?php
//Registrcijos forma
namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Vardas',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_field_lenght' => ['lenght' => 40],
                            'validate_no_numbers_or_symbols'
                        ]
                    ],
                ],
                'surname' => [
                    'label' => 'Pavarde',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_field_lenght' => ['lenght' => 40],
                            'validate_no_numbers_or_symbols'
                        ]
                    ],
                ],
                'email' => [
                    'label' => 'E-pastas',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_mail',
                            'validate_is_email'
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Slaptazodis',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
                'password_repeat' => [
                    'label' => 'Pakartot slaptazodi',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
                'phone' => [
                    'label' => 'Telefono numeris',
                    'type' => 'number',
                    'extra' => [
                        'validators' => [
                        ]
                    ],
                ],
                'address' => [
                    'label' => 'Namu adresas',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                        ]
                    ],
                ]
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Registruotis',
                ],
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ]
            ],
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }

}
