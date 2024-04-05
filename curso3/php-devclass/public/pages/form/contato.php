<?php
require('../../../bootstrap.php');

// $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
// $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
// $assunto = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
// $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if(isEmpty()) {
    flash('message', 'Preencha todos os campos');

    return redirect('contato');
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's',
]);






// $data = [
//     'quem' => $validate->email,
//     'para' => 'williamitalia70@outlook.com',
//     'message' => $validate->message,
//     'assunto' => $validate->subject,
// ];


// if(send($data)) {
//     redirect('contato');
//     flash('message', 'Email enviado com sucesso', 'sucess');
// };