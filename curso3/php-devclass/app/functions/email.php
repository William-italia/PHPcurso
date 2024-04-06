<?php 

// function send($data) {
//     $to = 'williamitalia70@outlook.com';
//     $subject = $data->subject;
//     $message = $data->message;
//     $headers = "From: {$data->email}" . "\r\n" . 
//     'Reply-To: contato@devclass.com.br' . "\r\n" . 
//     'X-mailer: PHP/' . phpversion();
// }

function send(array $data) {

    $mail = new PHPMailer\PHPMailer\PHPMailer;


    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '3fc0e9eadda1de';                     //SMTP username
        $mail->Password   = '4432b3be88d719';                               //SMTP password
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet    = 'UTF-8';
        
        $mail->setFrom('devfullstack@hotmail.com');
        $mail->FromName = ($data['quem']);     
        $mail->addAddress($data['para']);     //Add a recipient
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Body    = $data['mensagem'];
        $mail->Subject = $data['assunto'];
        $mensagem      = "Nome: {$data['nome']}<br>";
        $mensagem     .= "Mensagem: " . $data['mensagem'];

        $mail->MsgHTML($mensagem);
        
        return $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

// function send(array $data) {
//     $mail = new PHPMailer\PHPMailer\PHPMailer;

//     try {
//         // Configurações do servidor SMTP para o Outlook
//         $mail->isSMTP();                        // Enviar usando SMTP
//         $mail->Host       = 'smtp.office365.com';  // Servidor SMTP do Outlook
//         $mail->SMTPAuth   = true;               // Ativar autenticação SMTP
//         $mail->Username   = 'Seu_email';  // Nome de usuário SMTP (seu e-mail Outlook)
//         $mail->Password   = 'Senha do seu email(apagar caso vá subir pro github)';  // Senha SMTP (sua senha Outlook)
//         $mail->SMTPSecure = 'tls';              // Habilitar criptografia TLS
//         $mail->Port       = 587;                // Porta TCP para conexão (587 para TLS)
//         $mail->CharSet    = 'UTF-8';

//         $mail->setFrom('Seu_email');
//         $mail->FromName = $data['quem'];
//         $mail->addAddress($data['para']);      // Adicionar um destinatário

//         // Conteúdo
//         $mail->isHTML(true);                   // Definir formato de e-mail para HTML
//         $mail->Subject = $data['assunto'];
//         $mensagem      = "Nome: {$data['nome']}<br>";
//         $mensagem     .= "Mensagem: " . $data['mensagem'];
//         $mail->Body    = $mensagem;

//         // Enviar e-mail
//         return $mail->send();
//     } catch (Exception $e) {
//         echo "A mensagem não pôde ser enviada. Erro do Mailer: {$mail->ErrorInfo}";
//     }
// }
