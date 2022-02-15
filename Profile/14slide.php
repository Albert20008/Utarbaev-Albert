<?php
function RandomArr2(array $arr, int $len = 10): array
{
    for ($i = 0; $i < $len; $i++)
    {
        $arr[$i] = mt_rand(0, 10);
    }

    return $arr;
}

$str = "HTML, CSS, PHP, BITRIX";

function CountWords2(string $string): int
{
    $strArr = explode(' ', $string);
    $countWord = 0;
    for ($i = 0; $i < count($strArr); $i++)
    {
        if ($strArr[$i])
            $countWord++;
    }

    return $countWord;
}

function ReverseString(string $string)
{
    for ($i = strlen($string) - 1; $i >= 0; $i--)
        echo $string[$i];
}

function MyStrLen(string $string)
{
    $len = 0;
    while ($string[$len])
    {
        $len++;
    }

    echo $len;
}

function CharNewString(string $string)
{
    $noLetters = [',', '.', '!', ' ', '<br>', '?', ':', ';'];
    for ($i = 0; $i < strlen($string); $i++)
        if (!(in_array($string[$i], $noLetters)))
            echo "$string[$i]<br>";
}
?>
