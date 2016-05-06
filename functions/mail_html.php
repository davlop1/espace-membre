<?php
function mail_html( string $email, string $subject, string $message ) {
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'From: Steven <steven@monsite.dev>' . "\r\n";

  mail( $email, $subject, $message, $headers );
}
