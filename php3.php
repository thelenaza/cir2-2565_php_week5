<?php
$role = 'editor';
$msg = " ";

switch($role){
    case 'admin':
        $msg = 'Welcome,admin!';
        break;
    case 'editor':
        $msg = 'Welcome! You have some pending articles to edit';
        break;
    case 'author':
        $msg = 'Welcome! Do you want to publish the draft article?';
        break;
    case 'subscriber':
        $msg = 'Welcome! Check out some new articles';
        break;
    default:
       $msg = 'You are not authorized to access this pahe';
    
}

echo $msg;
?>