<?php
    $body = file('int.php');
    file_put_contents( 'int.txt', join(',', $body) );
?>