<?php
session_start();

$action = filter_input(INPUT_POST, 'action', FILTER_DEFAULT);

if ($action && $action === 'subscribe') {
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  if (!$email) {
    $_SESSION['msg_subscribe'] = "<p class='alert alert-danger'>Erro! Favor preencher um e-mail válido.</p>";
    header('Location: index.php?#subscribe');
    exit;
  }

  $subject = 'Subscrição no site';
  $msg = "O e-mail $email efetuou uma subscrição";
}

if ($action && $action === 'formulario') {
  $dados = filter_input_array(INPUT_POST);

  foreach ($dados as $item) {
    if ($item == '') {
      $_SESSION['msg_contacts'] = "<p class='alert alert-danger'>Erro! Todos os campos devem ser preenchidos.</p>";
      header('Location: index.php?#contacts');
      exit;
    }
  }

  $subject = 'Cliente enviou uma mensagem';
  $msg = "Recebemos uma mensagem:\n
          Nome: " . $dados['nome'] . " \n
          E-mail: " . $dados['email'] . "\n
          Telefone: " . $dados['telefone'] . "\n
          Assunto: " . $dados['assunto'] . "\n
          Mensagem: " . $dados['mensagem'] . "\n";
}

$SENDGRID_API_KEY = 'SENDGRID_API_KEY';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.sendgrid.com/v3/mail/send');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$header = [
  "Authorization: Bearer $SENDGRID_API_KEY",
  "Content-Type: application/json"
];

$postFields = [
  'personalizations' => [
    [
      'to' => [
        [
          'email' => 'EMAIL_DA_EMPRESA_DONA_DO_SITE'
        ]
      ]
    ]
  ],
  'from' => [
    'email' => 'EMAIL_VALIDADO_NO_SENDGRID'
  ],
  'subject' => $subject,
  'content' => [
    [
      'type' => 'text/plain',
      'value' => $msg
    ]
  ]
];

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postFields));

$response = curl_exec($ch);
curl_close($ch);

if ($action && $action == 'subscribe') {
  if ($response !== '') {
    $_SESSION['msg_subscribe'] = "<p class='alert alert-danger'>Erro! Ocorreu um erro. Por favor, tente novamente.</p>";
    header('Location: index.php?#subscribe');
    exit;
  }
  $_SESSION['msg_subscribe'] = "<p class='alert alert-success'>Obrigado! Sua subscrição foi realizada com sucesso.</p>";
  header('Location: index.php?#subscribe');
  exit;
}

if ($action && $action == 'formulario') {
  if ($response !== '') {
    $_SESSION['msg_contacts'] = "<p class='alert alert-danger'>Erro! Ocorreu um erro. Por favor, tente novamente.</p>";
    header('Location: index.php?#contacts');
    exit;
  }
  $_SESSION['msg_contacts'] = "<p class='alert alert-success'>Sucesso! E-mail enviado.</p>";
  header('Location: index.php?#contacts');
  exit;
}
