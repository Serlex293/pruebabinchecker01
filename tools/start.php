<?php

  if ((strpos($message, "/start") === 0)||(strpos($message, ".start") === 0)){
    sendMessage($chatId,$message_id, "<i><b>[ðŸ¥€]Bienvenido <code>@$username</code>%0A[ðŸ’­]ID: <code>$userId</code>%0A- Usa /cmds para ver mis comandos.</b></i>");
    }
?>