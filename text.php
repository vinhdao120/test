<?php
    $a = [
        'test' => 1,
        'test2' => 2
    ];

    extract($a);
    echo $test;
?>