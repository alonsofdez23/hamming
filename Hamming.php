<?php

/**
 * @author Alonso Fernández Vidal <alonsobs23@gmail.com>
 * @copyright Copyright (c) 2020 Alonso Fernández
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */

 /**
  * Calcula la distancia Hamming entre dos cadenas de ADN
  * @param $a string La primera cadena.
  * @param $b string La segunda cadena.
  * @return int|bool El número de caracteres distintos,
  *                  o false si tienen distinta longitud
  */
function distancia($a, $b)
{
    if (mb_strlen($a) != mb_strlen($b))
    {
        return false;
    }
    return count(array_diff_assoc(mb_str_split($a), mb_str_split($b)));
}