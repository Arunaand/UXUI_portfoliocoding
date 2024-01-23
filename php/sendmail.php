<?php

$email = addcslashes($_REQUEST['q']) ;

mail( "yourname@example.com", "E-Mail entered",
"E-Mail entered: $email");
header( "Location: http://www.example.com/thankyou.html" );
?>