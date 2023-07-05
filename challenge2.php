<?php
    $message1 = '0@sn9sirppa@#?ia’jgtvryko1';
    $strlenMessage1 = strlen($message1);
    $numberKey1 = $strlenMessage1/2;
    echo $numberKey1, " ";

    $message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
    $strlenMessage2 = strlen($message2);
    $numberKey2 = $strlenMessage2/2;
    echo $numberKey2, " ";

    $message3 = 'aopi?sgnirts@#?sedhtg+p9l!';
    $strlenMessage3 = strlen($message3);
    $numberKey3 = $strlenMessage3/2;
    echo $numberKey3, " ";

    // Etape 2

    $substrNumKey1 = substr('0@sn9sirppa@#?ia’jgtvryko1', 6, -$numberKey1);
    echo $substrNumKey1, " ";

    $substrNumKey2 = substr('q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj', 6, -$numberKey2);
    echo $substrNumKey2, " ";

    $substrNumKey3 = substr('q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj', 6, -$numberKey3);
    echo $substrNumKey3, " ";

    // Etpae 3 
    $letterToReplace = array("@", "#", "?");
    $replaceNumKey1 = str_replace($letterToReplace, " ", $substrNumKey1);
    $replaceNumKey2 = str_replace($letterToReplace, " ", $substrNumKey2);
    $replaceNumKey3 = str_replace($letterToReplace, " ", $substrNumKey3);
    echo $replaceNumKey1," ";
    echo $replaceNumKey2," ";
    echo $replaceNumKey3," ";

    //Etape 4
    echo strrev("$replaceNumKey1 $replaceNumKey2 $replaceNumKey3");
?> 