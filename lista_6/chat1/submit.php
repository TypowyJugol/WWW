<?php

$chat=file_get_contents('chat.txt');
$nick=htmlentities($_POST['nick']); 
if($text=htmlentities($_POST['text']))
{    
    $chat="<li><b>$nick:</b> $text</li>\n".$chat;
    file_put_contents('chat.txt',$chat);
}

echo $chat;
