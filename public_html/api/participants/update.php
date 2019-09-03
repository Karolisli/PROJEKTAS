<?php

use \App\App;

require '../../../bootloader.php';

// Check user authorization
if (!App::$session->userLoggedIn()) {
    $response = new \Core\Api\Response();
    $response->addError('You are not authorized!');
    $response->printas();
}

// Filter received data
$form = (new \App\Participants\Views\ApiForm())->getData();
$filtered_input = get_form_input($form);
validate_form($filtered_input, $form);

/**
 * If request passes validation
 * this function is automatically
 * called
 * 
 * @param type $filtered_input
 * @param type $form
 */
function form_success($filtered_input, &$form) {
    $response = new \Core\Api\Response();
    $model = new \App\Participants\Model();

    $conditions = [
        'row_id' => intval($_POST['id'])
    ];


    $participants = $model->get($conditions);
    if (!$participants) {
        $response->addError('Participant doesn`t exist!');
    } else {
        $participant = $participants[0];


        $participant->setName($filtered_input['name']);
        $participant->setComment($filtered_input['comment']);

        $model->update($participant);
        
        $response->setData($participant->getData());
    }
    
    $response->printas();
}

function form_fail($filtered_input, &$form) {
    $response = new \Core\Api\Response();

    foreach ($form['fields'] as $field_id => $field) {
        if (isset($field['error'])) {
            $response->addError($field['error'], $field_id);
        }
    }

    $response->printas();
}