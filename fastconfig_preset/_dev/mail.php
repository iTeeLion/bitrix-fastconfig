<?php
$to = '';
$subject = 'Test message';
$message = 'This is test message content';
$additional_headers = [];
$additional_params = '';
$res = mail($to , $subject , $message , $additional_headers, $additional_params);
echo '<pre>'; var_dump($res); echo '</pre>';
