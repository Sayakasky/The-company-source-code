<?php

    include "../classes/User.php";

    /**
     * create an object
     */

     $user = new User;
     # Note: The $user is the object

     # Call the method
     $user->store($_POST);
     # Note: the $_POST --- holds the data coming from the registration form(first_name, last_name, username, and the password)

     /**
      *  $_POST =  array[first_name. last_name, username, password];
      */

?>
