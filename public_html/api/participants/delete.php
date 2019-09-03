<?php

use App\App;

require '../../../bootloader.php';

$response = new \Core\Api\Response();

if (App::$session->userLoggedIn()) {

    $model = new \App\Participants\Model();
    
    $participants = $model->get(['row_id' => intval($_POST['id'])]);

    if ($participants) {
        $person = $participants[0];
        $model->delete($person);

        $response->setData($person->getData());
    } else {
        $response->addError('Participant doesn`t exist');
    }
} else {
    $response->addError('Authorization failed!');
}

$response->printas();
