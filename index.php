<?php
function validateClass($str)
{
    $regexp = "/^[C|A|P][0-9]{4}[G|H|I|K|L|M]$/";
    if (preg_match($regexp, $str)) {
        echo "Ten lop hop le";
    } else {
        echo "Ten lop khong hop le";
    }
}
validateClass("C0320I");