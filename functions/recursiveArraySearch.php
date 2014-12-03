<?php
function recursiveArraySearch($needle, $haystack) {
    foreach($haystack as $key => $value) {
        $currentKey = $key;
        if($needle === $value OR (is_array($value) AND recursiveArraySearch($needle,$value) !== false)) {
            return $currentKey;
        }
    }
    return false;
}