<?php
function pal($string)
{
    if(strrev($string)==$string)
    {
        echo "The given String is palindrome";
    }
    else
    {
        echo "The given string is not a palindrome";
    }

}
$str = readline("enter a string");
pal($str);
?>