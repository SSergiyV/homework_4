<?php

require_once 'classes/ValueObject.php';

try {
    $color = new ValueObject(200, 200, 200);
    $color_2 = $color -> mix (new ValueObject(100, 100, 100));
    var_dump($color -> equals($color, $color_2));
    $rgb = ValueObject::random();
    var_dump($rgb);
    echo $color -> getRed();
    echo $color -> getGreen();
    echo $color -> getBlue();
}
catch (Exception $e) {
    echo $e -> getMessage();
}
