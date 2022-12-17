<?php

/**
 * A plugin to show a message to users
 *
 * @package hello_message
 * @author Muhammad Arnaldo
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 **/

function local_hello_message_before_footer()
{
    global $PAGE;
    $link_array = explode('/', $PAGE->url);
    if (end($link_array) == "courses.php") {
        $today = date('l, d F Y');
        $message = "Today is " . $today . ".<br> Start your learning session by saying Basmallah.";

        $type = \core\output\notification::NOTIFY_INFO;
        \core\notification::add($message, $type);
    }
}
