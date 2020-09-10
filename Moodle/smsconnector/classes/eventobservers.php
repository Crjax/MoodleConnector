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

        $connectionInfo = array("UID"=>$user, "PWD"=>$pass, "Database"=>$db);
        $conn = sqlsrv_connect( $host, $connectionInfo);  
        
        $sql = "log_moodle_attempt 'satisfied'";
        $stmt = sqlsrv_query( $conn, $sql);  

        if(!$stmt)  
        {
            die( print_r( sqlsrv_errors(), true));  
        }  
    }
}

?>