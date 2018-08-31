<?php
// TITULO E EMAIL QUE CHEGA A MENSAGEM
$titulo_email = 'Mensagem Site INUP Brasil';
$email_destino = 'contato@inupbrasil.com.br';


// VERIFICA SE O EMAIL É VÁLIDO
function verifica_email($email_verificado){
  return filter_var($email_verificado, FILTER_VALIDATE_EMAIL);
}

// ARRAY COM VERIFICAÇÃO DO SCRIPT
$data_json = array();

if ($_POST) {

    $data_json['erro_server_side'] = 'OK - Mensagem Enviada';
    
    // VALORES DOS INPUTS
    $nome         = stripslashes($_POST['nome']);
    $email        = stripslashes($_POST['email']);  
    $mensagem     = stripslashes($_POST['mensagem']);


    // VARÍAVEL QUE REPRESENTA O CORPO DO EMAIL QUE CHEGA NA CAIXA DE MENSAGEM: 
    $email_body = 
    '<p><b>Nome:</b> '.$nome.'</p>
    <p><b>Email:</b> '.$email.'</p>
    <p><b>Mensagem:</b> '.$mensagem.'</p>';
    

    if (!empty($nome)
        && verifica_email($email) 
        && !empty($mensagem)
        ) {
 


        $headers  = "MIME-Version: 1.1" . PHP_EOL;
        $headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
        $headers .= "Content-Transfer-Encoding: 8bit" . PHP_EOL;
        $headers .= "Date: " . date('r', $_SERVER['REQUEST_TIME']) . PHP_EOL;
        $headers .= "Message-ID: <" . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>' . PHP_EOL;
        $headers .= "From: " . $email . PHP_EOL;
        $headers .= "Return-Path:" . $email_destino . PHP_EOL;
        $headers .= "Reply-To: " . $email . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;
        $headers .= "X-Originating-IP: " . $_SERVER['SERVER_ADDR'] . PHP_EOL;


        // @mail aqui permite a funcionalidade(fictícia para debug) da função mail em localhost, 
        // @ suprime erros de script
        @mail($email_destino, $titulo_email, $email_body, $headers);

    } else {
        // envia o status do desse script para a chamda ajax la no callback success;
        $data_json['erro_server_side'] = 'Falha';
    } 
    
    echo json_encode($data_json);
    
}

?>
