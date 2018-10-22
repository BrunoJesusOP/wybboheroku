<?php
    // You need to install the sendgrid client library so run:     
    // composer require sendgrid/sendgrid
    require './../vendor/sendgrid/sendgrid/sendgrid-php.php';
    
    // contains a variable called: $API_KEY that is the API Key.
    // You need this API_KEY created on the Sendgrid website.
    //include_once('./credentials.php');

    $API_KEY='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';
    
    $FROM_EMAIL = 'wybbo@outlook.com';
    // they dont like when it comes from @gmail, prefers business 
    // emails
    
    $TO_EMAIL = 'brunhocardoso155@hotmail.com';
    // Try to be nice. Take a look at the anti spam laws. In most
    // cases, you must have an unsubscribe. You also cannot be 
    // misleading.
    $subject = "Teste";
    $from = new SendGrid\Email(null, $FROM_EMAIL);
    $to = new SendGrid\Email(null, $TO_EMAIL);
    $htmlContent = 'Teste de envio de mensagem';
    // Create Sendgrid content
    $content = new SendGrid\Content("text/html",$htmlContent);
    // Create a mail object
    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    
    $sg = new \SendGrid($API_KEY);
    $response = $sg->client->mail()->send()->post($mail);
      
    if ($response->statusCode() == 202) {
     // Successfully sent
     echo 'done';
    } else {
     echo 'false';
    }
?>