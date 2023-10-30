<?php

function redirect($page = false, $message = NULL, $message_type = NULL)
{
    if (is_string($page)) {
        $location = $page;
    }else{
      $location = $_SERVER["SCRIPT_NAME"];
    }
    
    // Check for message
    if ($message == NULL) {
       // Set message
       $_SESSION["message"] = $message;
    }
    
    // Redirect
    header('Location: ' .$location);
    exit();
}

function displayMessage()
{
    if (!empty($_SESSION['message'])) {
        # Assign message VAR..
        $message = $_SESSION['message'];
        
        if (!empty($_SESSION['message_type'])) {
            # Assign Message type...
            $message_type = $_SESSION['message_type'];
            
            #Create output
            if ($message_type == 'error') {
                echo "<div class='alert alert-danger'>" . $message . "</div>";
            }else{
                echo "<div class='alert alert-success'>" . $message . "</div>";
            }
        }
        unset($_SESSION["message"]);
        unset($_SESSION["message_type"]);
    }else{
        echo "";
    }
}

?>