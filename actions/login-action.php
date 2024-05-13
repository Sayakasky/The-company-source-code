<?php

    include "../classes/User.php";

    #create an object
    $user = new User;

    #call the login method
    $user->login($_POST);
    
?>
