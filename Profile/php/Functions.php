<?php
function CountVowel(array $allText): int
{
    $vowelsList = ["а", "А", "о", "О", "э", "Э", "е", "Е", "и", "И", "ы", "Ы", "у", "У", "ё", "Ё", "ю", "Ю", "я", "Я"];

    $countVowels = 0; //тут будут хранится количество гласных
    foreach ($allText as $key => $value)
    {
        if ($key != "namePictures")
        {
            for ($i = 0; $i < strlen($value); $i++)
            {
                $char = mb_substr($value, $i, 1);
                if (in_array($char, $vowelsList))
                    $countVowels++;
            }
        }
        else{
            foreach ($allText[$key] as $value)
            {
                for ($i = 0; $i < strlen($value); $i++)
                {
                    $char = mb_substr($value, $i, 1);
                    if (in_array($char, $vowelsList))
                        $countVowels++;
                }
            }
        }
    }
    return $countVowels;
}

function CountWords(array $allText): int
{
    $countWords = 0;
    foreach ($allText as $key => $value)
    {
        if ($key != "namePictures")
        {
            $countWords += count(explode(' ', $value));
        }
        else{
            foreach ($allText[$key] as $value)
            {
                $countWords += count(explode(' ', $value));
            }
        }
    }

    return $countWords;
}
?>