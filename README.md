Net_Socket_Tiarra
=====================

Send message to IRC via Tiarra socket.


Install
----------

Install via openpear.

      $ pear channel-discover openpear.org
      $ pear install openpear/Net_Socket_Tiarra


Example
----------

PHP Source:

```php:

<?php

require_once 'Net/Socket/Tiarra.php';

try
{
    $tiarra = new Net_Socket_Tiarra('socketname');

    // PRIVMSG
    $tiarra->message('#openpear@freenode', "Hello!!");

    // NOTICE
    $tiarra->noticeMessage('#openpear@freenode', "Hello!!");
} catch (Net_Socket_Tiarra_Exception $e) {
        echo $e->getMessage();
}
```


Tiarra setting:

```
control-socket-name: socketname
```

And

```
+ System::SendMessage {
}
```
