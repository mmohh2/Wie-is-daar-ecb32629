<?php

class ConsoleQuestion
{

    function readline()
    {
        return rtrim(fgets(STDIN));
    }
}

$line = new ConsoleQuestion();
$prompt = "hoi goeiemorgen ";
echo $prompt;
$answer = $line->readline();
echo "doei" . $answer;

?>