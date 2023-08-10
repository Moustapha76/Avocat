<?php
if (isset($_GET['p'])) {
    $url = $_GET['p'];
    if ($url == 'banner') {include("banner.php");}
    elseif ($url == 'service') {include("service.php");} 
    elseif ($url == 'displayLead') {include("displayLead.php");}
    else{include("lead.php");} 
} else {header("location:outil.php");} 
// internal error in server due to escape after location
?>