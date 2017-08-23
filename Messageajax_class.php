<?php /* Template Name: Ajax submit Template */ ?>

<?php

class Messengerajax {
    private $user_obj;
    private $connection;
    
    public function __construct($connection, $user){
        $this->connection = $connection;  /* this->connection means, this class's private variable $connection (delared at the top) is equal to the $connection variable logged in. They don't need to have the same name since they are not the SAME variable, but they conventionally are named in this fashion. */
        $this->user_obj = new User($connection, $user);
    }

?>


<?php



if(isset($_POST['pasta'])) {
        $a = 1;
        $body = strip_tags($_POST['pizza']);
        $user_to = strip_tags($_POST['pasta']);
        $_SESSION['pasta'] = $user_to;
        submitMessage($_POST['pizza'], $_POST['pasta']);
        echo "<script>console.log('Calling submitMessage function from AJAX');</script>";
        $logfile = fopen("logfile.txt", "a");
        $u = $userLoggedIn;
        $ut = $_POST['pasta'];
        $b = $_POST['pizza'];
/*    
        fwrite($logfile, "Log" . $a . ":" . PHP_EOL);
        fwrite($logfile, $u."   ");
        fwrite($logfile, $ut."   ");
        fwrite($logfile, $b. PHP_EOL);
        fwrite($logfile, "-----------------------------------------------------". PHP_EOL);
 */
    
        fwrite($logfile, "Log" . $a . ":" . PHP_EOL);
        fwrite($logfile, $u."   ");
        fwrite($logfile, $ut."   ");
        fwrite($logfile, $b. PHP_EOL);
        fwrite($logfile, "-----------------------------------------------------". PHP_EOL);
    
        fclose($logfile);

        $a = $a + 1;
        }

    echo "<div style='height: 200px; width: 200px; background-color: green; color: black;'>";
    echo $body;
    echo "<br>";
    echo $user_to;
    echo "</div>";



public function submitMessage($body, $user_to) {
        //$body = strip_tags($body);
        //$body = mysqli_real_escape_string($connection, $body);
        //$check_empty = preg_replace('/\s+', '', $body); // Deletes all spaces
        $added_by = $_SESSION['username'];

                    $logfile = fopen("logfile.txt", "a");
                    fwrite($logfile, "Running submitMessage function (part 1)." . PHP_EOL);
                    fwrite($logfile, "added_by: " . $added_by . PHP_EOL);
                    fwrite($logfile, "body: " . $body . PHP_EOL);
                    fwrite($logfile, "user_to: " . $user_to . PHP_EOL);
                    fwrite($logfile, "-----------------------------------------------------". PHP_EOL);
                    fclose($logfile);
    
        if($body != '') {
            $date_added = date("Y-m-d H:i:s");
            $added_by = $_SESSION['username'];
            //$user_to = $added_by;
            
            $get_messages_query = mysqli_query($this->connection, "SELECT * FROM messenger WHERE added_by='$userLoggedIn'"); 
            $messages_array = mysqli_fetch_assoc($get_messages_query);
            $num_rows = mysqli_num_rows($get_messages_query);
            
            if($num_rows > 0) {
                    $logfile = fopen("logfile.txt", "a");
                    fwrite($logfile, "Connection to database looks good" . PHP_EOL);
                    fwrite($logfile, "-----------------------------------------------------". PHP_EOL);
                    fclose($logfile);    
            }
            else {
                    $logfile = fopen("logfile.txt", "a");
                    fwrite($logfile, "DATABASE NOT RESPONDING" . PHP_EOL);
                    fwrite($logfile, "-----------------------------------------------------". PHP_EOL);
                    fclose($logfile); 
            }
            
            $user_messages_id = 0;
            
                    $logfile = fopen("logfile.txt", "a");
                    fwrite($logfile, "Running submitMessage function (part 2)." . PHP_EOL);
                    fwrite($logfile, "added_by: " . $added_by . PHP_EOL);
                    fwrite($logfile, "body: " . $body . PHP_EOL);
                    fwrite($logfile, "user_to: " . $user_to . PHP_EOL);
                    fwrite($logfile, "date_added: " . $date_added . PHP_EOL);
                    fwrite($logfile, "-----------------------------------------------------". PHP_EOL);
                    fclose($logfile);
                
            $query_messages = mysqli_query($this->connection, "INSERT INTO messenger VALUES (NULL, '$body', '$added_by', '$user_to', '$date_added', 'no', 'no', '0', '$user_messages_id' )");
        }
    }

?>