<?php
//String Manipulation
$text = "The quick brown fox jumps over the lazy dog.";

function manipulateString($inputText){
    $modifiedText = strtr(strtolower($inputText), [
        "brown" => "red"
    ]);
    echo $modifiedText;
}

manipulateString($text);

