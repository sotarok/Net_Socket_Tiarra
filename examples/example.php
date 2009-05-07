<?php
/** 
 * 
 * 
 */

require_once '../src/Net/Socket/Tiarra.php';

try
{
    $tiarra = new Net_Socket_Tiarra('tiarra_socket_name_here');

    // PRIVMSG
    $tiarra->message('#openpear@freenode', "Hello!!");

    // NOTICE
    $tiarra->noticeMessage('#openpear@freenode', "Hello This is Notice!!");
} catch (Net_Socket_Tiarra_Exception $e) {
    echo $e->getMessage();
}

