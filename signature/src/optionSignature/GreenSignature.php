<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/signature/src/interface/InterfaceSignature.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/signature/src/optionSignature/ColorSignature.php';


class GreenSignature implements InterfaceSignature
{
    public function uploadSubscribe(string $name, string $message)
    { 
        $signature = (new ColorSignature)->getColorSignature('green', $name);
        $fp = fopen('../downloads/' . time() . 'greenSignature.html', 'w');
        fwrite($fp, $message . $signature);
        fclose($fp);
    }
}
