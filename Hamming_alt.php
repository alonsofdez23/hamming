<?php

/**
 * @author Alonso Fernández Vidal <alonsobs23@gmail.com>
 * @copyright Copyright (c) 2020 Alonso Fernández
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */

function distancia($a, $b)
{
    if (mb_strlen($a) != mb_strlen($b)){
        return false;
    }

    $ret = 0;

    for ($i=0; $i < mb_strlen($a); $i++) { 
        if (mb_substr($a, $i, 1) != mb_substr($b, $i, 1)) {
            $ret++;
        }
    }

    return $ret;
}