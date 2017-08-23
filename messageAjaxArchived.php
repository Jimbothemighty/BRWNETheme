<?php
ob_start();
session_start();  
?>


<?php

if(isset($_POST['pasta'])) {
        
        $body = strip_tags($_POST['pizza']);
        $user_to = strip_tags($_POST['pasta']);
        $_SESSION['pasta'] = $user_to;
        $logfile = fopen("logfile.txt", "a");
        $u = $userLoggedIn;
        $ut = $_POST['pasta'];
        $b = $_POST['pizza'];
    
        fwrite($logfile, "Log" . ":" . PHP_EOL);
        fwrite($logfile, $u."   ");
        fwrite($logfile, $ut."   ");
        fwrite($logfile, $b. PHP_EOL);
        fwrite($logfile, "-----------------------------------------------------". PHP_EOL);
    
        fclose($logfile);
        if($body != '') {
        $date_added = date("Y-m-d H:i:s");
        $added_by = $_SESSION['username'];
        $user_messages_id = 0;
    
        $conn = mysqli_connect("localhost", "root", "root", "soc_net"); // connection variable
        $query_messages = mysqli_query($conn, "INSERT INTO messenger VALUES (NULL, '$body', '$added_by', '$user_to', '$date_added', 'no', 'no', '0', '$user_messages_id' )");   
        }
}

?>