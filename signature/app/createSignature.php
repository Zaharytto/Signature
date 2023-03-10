<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/signature/src/CreateSignature.php';

try {
    $factory = new CreateSignature();
    $signature = $factory->getSignature($_POST['select']); 
    $signature->uploadSubscribe($_POST['FullName'], $_POST['message']);
    
    echo json_encode([
        'status' => true,
        'message' => 'Подписанный текст загружен в папку downloads!',
    ]);
} catch (Exception $exception) {

    echo json_encode([
        'status' => false,
        'message' => $exception->getMessage()
    ]);   
}
