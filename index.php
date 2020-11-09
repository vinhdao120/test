<?php
    $body = file('int.php');
    file_put_contents( 'int.txt', join(',', $body) );
    echo 123;
<<<<<<< HEAD
    echo 432;
=======
echo 678;
>>>>>>> 7623d1a60dd29a7f9deced521c3670f252ec508f
?>
