<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/signature/src/optionNumber/OfficeNumberInMinsk.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/signature/src/optionNumber/OfficeNumberInWarsaw.php';

class ColorSignature
{
    public function getColorSignature(string $color, string $name): string
    {
        
        $numM = (new OfficeNumberInMinsk)->getNumber();
        $numW = (new OfficeNumberInWarsaw)->getNumber();

        return '<meta charset="UTF-8" />' .
        '<p style=' . "color:$color" . '>' . '<br>' .
            '-' . '<br>' .
            'С уважением' . '<br>' .
            $name . '<br>' .
            'Тел.' . '<br>' .
            '<a href=' . "tel:$numM" . '>' .
            $numM . '</a>' . '<br>' .
            '<a href=' . "tel:$numW" . '>' .
            $numW . '</a>' . '<br>' .
            'Email' . '<br>' .
            '<a href="https://e.mail.ru/compose?To=demo%40bx-shef.by">' .
            'demo@bx-shef.by' .'</a>' . '<br>' .
            '<a href="https://e.mail.ru/compose?To=demo2%40bx-shef.by">' .
            'demo2@bx-shef.by' .'</a>' .
        '</p>';
    }
}