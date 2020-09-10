<?php

namespace local_smsconnector;

defined('MOODLE_INTERNAL') || die();

class eventobservers
{
    public static function handle_event($event) {
        $host = '';
        $db   = '';
        $user = '';
        $pass = '';
        
        $conn =  new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "log_moodle_attempt 'satisfied'";
                
        $conn->query($sql);
        
        $conn->close();
    }
}

?>