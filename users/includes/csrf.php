<?php
if ($_Server['REQUEST_METHOD']=='post')
{
if (!isset($_post['_token'])  || ($_post['_token']  !== $_session['_token']))
{
die('invalid CSRF token');    
}   
}
$_session['_token']=bin2hex(openssl_random_pseudo_bytes(16));

?>