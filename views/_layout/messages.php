<?php

if(isset($_SESSION['messages'])){
    echo "<ul id='messages'>";
    $messages = $_SESSION['messages'];
    foreach ($messages as $msg){
        $type = htmlspecialchars($msg['type']);
        $msgText = htmlspecialchars($msg['text']);
        echo "<li class='$type'>$msgText</li>";
    }
    echo "</ul>";
    unset($_SESSION['messages']);
};