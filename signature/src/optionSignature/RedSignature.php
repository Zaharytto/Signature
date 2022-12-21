<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/signature/src/interface/InterfaceSignature.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/signature/src/optionSignature/ColorSignature.php';


class RedSignature implements InterfaceSignature
{
    public function uploadSubscribe(string $name, string $message)
    {
        $signature = (new ColorSignature)->getColorSignature('red', $name);
        $fp = fopen('../downloads/' . time() . 'redSignature.html', 'w');
        fwrite($fp, $message . $signature);
        fclose($fp);
    }
}
