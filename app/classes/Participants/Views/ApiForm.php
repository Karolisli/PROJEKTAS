<?php
//Validuoja feedback.php ivestus inputus
namespace App\Participants\Views;

class ApiForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'name' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ]
                ],
                'comment' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_field_lenght' => ['lenght' => 500],
                        ]
                    ]
                ],
            ],
            'callbacks' => [
                'success' => 'form_success',
                'fail' => 'form_fail',
            ]
        ];
    }

}
