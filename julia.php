<?php
function juliaFunction($シ, $犬) {
    $げ = '';

    for ($i = 0; $i < mb_strlen($シ, 'UTF-8'); $i++) {
        $char = mb_substr($シ, $i, 1, 'UTF-8');
        $げ .= $犬[$char] ?? $char;
    }

    return $げ;
}
