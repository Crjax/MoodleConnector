<?php

defined('MOODLE_INTERNAL') || die();

$observers = array(
    array(
        'eventname' => '\mod_quiz\event\attempt_submitted',
        'callback'  => '\local_smsconnector\eventobservers::handle_event',
    ),

    array(
        'eventname' => '\core\event\user_loggedin',
        'callback'  => '\local_smsconnector\eventobservers::handle_event',
    ),
);

?>