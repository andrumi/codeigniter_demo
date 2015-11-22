<?php
require('Pusher.php');

// Read and clean user input
$message = CleanInput($_POST['message']);
$name = CleanInput($_POST['name']);

// Handles ID etc 
$key = $_POST['key'];
$secret = $_POST['secret'];
$app_id = $_POST['app_id'];

// Create pusher object
$pusher = new Pusher($key, $secret, $app_id);

$data = $name.' says: '.$message.'<br />';
// Trigger new-message event, which will be sent to all clients
$pusher->trigger('my_channel', 'new_message',$data);// $name.' says: '.$message.'<br />'

//------------------------------------------------------------------------------

function CleanInput($text) 
{
$text = stripslashes($text);
$text = htmlentities($text);
$text = preg_replace('/https?:\/\/[^\s<]+/i', '<a href="\0">\0</a>', $text);

return $text;
}
