<?php

include 'layouts/head.php' ;
include 'layouts/nav.php' ;

session_start();

session_destroy();

header('location:index.php') ;

include 'layouts/footer.php' ; 
include 'layouts/js.php' ; 

?>

